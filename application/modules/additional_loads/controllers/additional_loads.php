<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Tracking_detail
 */
class Additional_loads extends Admin_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('mdl_additional_loads');
        $this->load->model('clients/mdl_clients');
        $this->load->model('shippers/mdl_shippers');
        $this->load->model('receivers/mdl_receiver');
        $this->load->model('carriers/mdl_carriers');
        $this->load->model('shipping/mdl_shipping');
        $this->load->model('orderstatus/mdl_orderstatus');
        $this->load->model('trailersize/mdl_trailersize');
        $this->load->model('trailertype/mdl_trailertype');
        $this->load->model('custombrokers/mdl_custombrokers');


    }
 

    public function index($page = 0)
    {
        $this->mdl_additional_loads->getadditional_loads()->paginate(site_url('additional_loads/index/'), $page);
        $trackingDetails = $this->mdl_additional_loads->result();


        $this->layout->set(
            array(
                'records' => $trackingDetails,
                'filter_display' => true,
                'filter_placeholder' => trans('Filter Additional Loads'),
                'filter_method' => 'filter_additional_loads'
            )
        );

        $this->layout->buffer('content', 'additional_loads/additional_loads');
        $this->layout->render();
    }


    public function form($id = null)
    {

        if ($this->input->post('btn_cancel')) {
            redirect('additional_loads');
        }

        $new_shipping = false;

         // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('shipping_order_id') != '') {
                $new_shipping = true;
        }


        if ($this->mdl_additional_loads->run_validation()) {

            $id = $this->mdl_additional_loads->save($id);
            if(!$id){
            $this->session->set_flashdata('alert_error', $id);
            redirect('additional_loads/form/' . $id);
            
            return;
            } else {
                redirect('additional_loads/view/' . $id);
            }
        }

        $trackingDetailCustom = "";

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_additional_loads->prep_form($id)) {
                show_404();
            }

            $this->mdl_additional_loads->set_form_value('is_update', true);
            $where['additional_id'] = $id;

            //$join['ip_additional_loads'] = 'ip_additional_loads.tracktraceid =  ip_additional_loads.trackingstatus';
            $trackingDetailCustom = $this->mdl_additional_loads->get_data("*",$where,true);
            //print_r($trackingDetailCustom);
            //die;
            if ($this->mdl_additional_loads->num_rows()) {

                foreach ($trackingDetailCustom as $key => $val) {
                    $this->mdl_additional_loads->set_form_value('custom[' . $key . ']', $val);
                }
        
            }
        } 

               

        $client = $this->mdl_clients->get_data("*");
        $shippers = $this->mdl_shippers->get_data("*");
        $receiver = $this->mdl_receiver->get_data("*");
        $carriers = $this->mdl_carriers->get_data("*");
        $shipping = $this->mdl_shipping->get_data("*");
        $orderstatus = $this->mdl_orderstatus->get_data("*");
        $trailersize = $this->mdl_trailersize->get_data("*");
        $trailertype = $this->mdl_trailertype->get_data("*");
        $brokerid = $this->mdl_custombrokers->get_data("*");


        $this->load->helper('country');
        $this->load->helper('custom_values');

        
        $this->layout->set(
            array(
                'client' => $client,
                'shippers' => $shippers,
                'receivers' => $receiver,
                'carriers' => $carriers,
                'shipping' => $shipping,
                'orderstatus' => $orderstatus,
                'trailersize' => $trailersize,
                'trailertype' => $trailertype,
                'select_destcarrier' => $carriers,
                'brokerid' => $brokerid,
                'customer' => $this->mdl_clients->form_value('customer') ?:'',
            )
        );

        $this->layout->buffer('content', 'additional_loads/form');
        $this->layout->render();
    }


    public function view($id)
    {
        $where['additional_id'] = $id;
        $tracking = $this->mdl_additional_loads->get_data("*",$where);

        if (!$tracking) {
            show_404();
        }

        $this->layout->set( array('additional_loads' => $tracking[0]));
        $this->layout->buffer('content','additional_loads/view');
        $this->layout->render();
    }


    public function delete($id)
    {    
        $this->mdl_additional_loads->delete($id);
        redirect('additional_loads/'); 
    }


    

}
