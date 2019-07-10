<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Shipping
 */
class Shipping extends Admin_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('mdl_shipping');
        $this->load->model('mdl_shippingoders');
        $this->load->model('clients/mdl_clients');
        $this->load->model('shippers/mdl_shippers');
        $this->load->model('receivers/mdl_receiver');
        $this->load->model('carriers/mdl_carriers');
        $this->load->model('orderstatus/mdl_orderstatus');
        $this->load->model('trailersize/mdl_trailersize');
        $this->load->model('trailertype/mdl_trailertype');
        $this->load->model('custombrokers/mdl_custombrokers');
        $this->load->model('dispatcher/mdl_dispatcher');
        $this->load->model("tax_rates/mdl_tax_rates");
        $this->load->model("service_code/mdl_servicecode");
        $this->load->model('tracktrace/mdl_tracktrace');



    }

    public function delete($shippingId)
    {    
        $this->mdl_shipping->delete($shippingId);
        redirect('Shipping/'); 
    }

    public function index($page = 0)
    {
       

        $this->mdl_shippingoders->getShippings()->paginate(site_url('shipping/index/'), $page);
        $shippings = $this->mdl_shippingoders->result();


        $this->layout->set(
            array(
                'records' => $shippings,
                'filter_display' => true,
                'filter_placeholder' => trans('filter_shipping'),
                'filter_method' => 'filter_shipping'
            )
        );

        $this->layout->buffer('content', 'shipping/orders');
        $this->layout->render();
    }


    public function form($id = null)
    {
        
        if ($this->input->post('btn_cancel')) {
            redirect('shipping');
        }

        $new_shipping = false;

         // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('shippingorderid') != '') {
                $new_shipping = true;
            
        }


        if ($this->mdl_shipping->run_validation()) {
            $id = $this->mdl_shipping->save($id);
            if(!$id){
            $this->session->set_flashdata('alert_error', $id);
            redirect('shipping/form/' . $id);
                return;
            } else {
                redirect('shipping/view/' . $id);
            }
        }

        $shipping_custom = "";

        if ($id and ! $this->input->post('btn_submit')) {
            if (!$this->mdl_shipping->prep_form($id)) {
                show_404();
            }

            $this->mdl_shipping->set_form_value('is_update', true);
            $where['id'] = $id;
            $join['ip_clients'] = 'ip_clients.client_id = ip_shipping.customer';
            $join['ip_shippers'] = 'ip_shippers.shipperid = ip_shipping.shipper';
            $join['ip_receivers'] = 'ip_receivers.receiverid = ip_shipping.receiver';
            $join['ip_carriers'] = 'ip_carriers.carrierid = ip_shipping.origincarrier';
            $join['ip_trailersize'] = 'ip_trailersize.trailersizeid = ip_shipping.trailersize';
            $join['ip_trailertype'] = 'ip_trailertype.trailertypeid = ip_shipping.trailertype';
            $join['ip_custombrokers'] = 'ip_custombrokers.brokerid = ip_shipping.brokerid';
            $join['ip_dispatcher'] = 'ip_dispatcher.dispatcherid = ip_shipping.dispatcher';
            $shipping_custom = $this->mdl_shipping->get_data("*",$where,true,$join);

            if ($this->mdl_shipping->num_rows()) {

                foreach ($shipping_custom as $key => $val) {
                    $this->mdl_shipping->set_form_value('custom[' . $key . ']', $val);
                }
        
            }
        } 

               

        $customer = $this->mdl_clients->get_data("*");
        $shipper = $this->mdl_shippers->get_data("*");
        $receiver = $this->mdl_receiver->get_data("*");
        $destinationhub = $this->mdl_receiver->get_data("*");
        $origincarrier = $this->mdl_carriers->get_data("*");
        $orderstatus = $this->mdl_orderstatus->get_data("*");
        $trailersize = $this->mdl_trailersize->get_data("*");
        $trailertype = $this->mdl_trailertype->get_data("*");
        $destcarrier = $this->mdl_carriers->get_data("*");
        $brokerid = $this->mdl_custombrokers->get_data("*");
        $dispatcher = $this->mdl_dispatcher->get_data("*");
        $shippingorders = $this->mdl_shipping->get_data("*");
         $trackingStatus = $this->mdl_tracktrace->get_data("*");


        

        $this->load->helper('country');
        $this->load->helper('custom_values');

        $this->layout->set(
            array(
                'shipping_custom' => $shipping_custom,
                'customer' => $customer,
                'shipper' => $shipper,
                'receiver' => $receiver,
                'destinationhub' => $destinationhub,
                'origincarrier' => $origincarrier,
                'trackingStatus' => $trackingStatus,
                'orderstatus' => $orderstatus,
                'trailersize' => $trailersize,
                'trailertype' => $trailertype,
                'destcarrier' => $destcarrier,
                'brokerid' => $brokerid,
                'dispatcher' => $dispatcher,
                'shippingOrders' => $shippingorders,
                'select_customer' => $this->mdl_shipping->form_value('customer') ?: '',
                'select_shipper' => $this->mdl_shipping->form_value('shipper') ?: '',
                'select_reciver' => $this->mdl_shipping->form_value('receiver') ?: '',
                'select_destinationhub' => $this->mdl_shipping->form_value('destinationhub') ?: '',
                'select_origincarrier' => $this->mdl_shipping->form_value('origincarrier') ?: '',
                'select_orderstatus' => $this->mdl_shipping->form_value('orderstatus') ?: '',
                'select_trailersize' => $this->mdl_shipping->form_value('trailersize') ?: '',
                'select_trailertype' => $this->mdl_shipping->form_value('trailertype') ?: '',
                'select_destcarrier' => $this->mdl_shipping->form_value('destcarrier') ?: '',
                'select_brokerid' => $this->mdl_shipping->form_value('brokerid') ?: '',
                'select_dispatcher' => $this->mdl_shipping->form_value('dispatcher') ?: '',
                'select_invoicesubmitted' => $this->mdl_shipping->form_value('invoicesubmitted') ?: '',
                'select_railcompleted' => $this->mdl_shipping->form_value('railcompleted') ?: 0,
                'select_truckcompleted' => $this->mdl_shipping->form_value('truckcompleted') ?: '',
                'select_delivered' => $this->mdl_shipping->form_value('delivered') ?: '',
                'select_customscleared' => $this->mdl_shipping->form_value('customscleared') ?: '',


            )
        );
        if($id != ''){
            $this->layout->buffer('content', 'shipping/tabs');
        }else{
            $this->layout->buffer('content', 'shipping/orderform');
        }
        
        $this->layout->render();
    }


    public function view($shipping_id)
    {

        $where['id'] = $shipping_id;
        $join['ip_clients'] = 'ip_clients.client_id = ip_shipping.customer';
        $join['ip_shippers'] = 'ip_shippers.shipperid = ip_shipping.shipper';
        $join['ip_receivers'] = 'ip_receivers.receiverid = ip_shipping.receiver';
        $join['ip_carriers'] = 'ip_carriers.carrierid = ip_shipping.origincarrier';
        $join['ip_trailersize'] = 'ip_trailersize.trailersizeid = ip_shipping.trailersize';
        $join['ip_trailertype'] = 'ip_trailertype.trailertypeid = ip_shipping.trailertype';
        $join['ip_custombrokers'] = 'ip_custombrokers.brokerid = ip_shipping.brokerid';
        $join['ip_dispatcher'] = 'ip_dispatcher.dispatcherid = ip_shipping.dispatcher';
        $shipping = $this->mdl_shipping->get_data("*",$where,true,$join);

        if (!$shipping) {
            show_404();
        }

        $this->layout->set( array('shipping' => $shipping));
        $this->layout->buffer('content','shipping/view');
        $this->layout->render();
    }


    

}
