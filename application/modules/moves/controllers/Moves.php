<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Moves
 */
class Moves extends Admin_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('mdl_moves');
        $this->load->model('mdl_movestrack');
        $this->load->model('shipping/mdl_shipping');
        $this->load->model('shippers/mdl_shippers');
        $this->load->model('receivers/mdl_receiver');
        $this->load->model('carriers/mdl_carriers');
        $this->load->model("tax_rates/mdl_tax_rates");
        $this->load->model("service_code/mdl_servicecode");


    }
 

    public function index($page = 0)
    {
     
 
        $this->mdl_movestrack->total_moves()->paginate(site_url('moves/index/'), $page);
        $moves = $this->mdl_movestrack->result();
        $this->layout->set(
            array(
                'records' => $moves,
                'filter_display' => true,
                'filter_placeholder' => trans('filter_moves'),
                'filter_method' => 'filter_moves'
            )
        );

        $this->layout->buffer('content', 'moves/moves');
        $this->layout->render();
    }


    public function form($id = null)
    {
        
        if ($this->input->post('btn_cancel')) {
            redirect('moves');
        }

        $new_shipping = false;

         // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('shippingorderid') != '') {
                $new_shipping = true;
            
        }


        if ($this->mdl_moves->run_validation()) {
            $id = $this->mdl_moves->save($id);
            if(!$id){
            $this->session->set_flashdata('alert_error', $id);
            redirect('moves/form/' . $id);
                return;
            } else {
                redirect('moves/view/' . $id);
            }
        }

        $moves_custom = "";

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_moves->prep_form($id)) {
                show_404();
            }

            $this->mdl_moves->set_form_value('is_update', true);
            $where['movesid'] = $id;
            $join['ip_shippers'] = 'ip_shippers.shipperid =  ip_moves.shipper';
            $join['ip_receivers'] = 'ip_receivers.receiverid =  ip_moves.receiver';
            $join['ip_carriers'] = 'ip_carriers.carrierid =  ip_moves.carrier';
            $moves_custom = $this->mdl_moves->get_data("*",$where,true,$join);

            if ($this->mdl_moves->num_rows()) {

                foreach ($moves_custom as $key => $val) {
                    $this->mdl_moves->set_form_value('custom[' . $key . ']', $val);
                }
        
            }
        } 

               

        $shipper = $this->mdl_shippers->get_data("*");
        $receiver = $this->mdl_receiver->get_data("*");
        $carrier = $this->mdl_carriers->get_data("*");
        $shippingorders = $this->mdl_shipping->get_data("*");
        $tax_rates = $this->mdl_tax_rates->get_data("*");
        $serviceCode = $this->mdl_servicecode->get_data("*");
       

        $this->load->helper('country');
        $this->load->helper('custom_values');

        $this->layout->set(
            array(
                'shipper' => $shipper,
                'receiver' => $receiver,
                'carrier' => $carrier,
                'shippingOrders' => $shippingorders,
                'tax_rates' => $tax_rates,
                'serviceCode' => $serviceCode,
                'select_shippingOrder' => $this->mdl_moves->form_value('shippingorderid') ?:'',
                'select_shipper' => $this->mdl_moves->form_value('shipper') ?: '',
                'select_reciver' => $this->mdl_moves->form_value('receiver') ?: '',
                'select_carrier' => $this->mdl_moves->form_value('carrier') ?: '',
                'select_taxrate' => $this->mdl_moves->form_value('movetaxrate') ?: '',
                'select_servicecode' => $this->mdl_moves->form_value('servicecode') ?: '',
                'id' => $this->mdl_moves->form_value('movesid') ? : '',

            )
        );

        $this->layout->buffer('content', 'moves/form');
        $this->layout->render();
    }


    public function view($id)
    {

        $where['movesid'] = $id;
        $join['ip_shippers'] = 'ip_shippers.shipperid =  ip_moves.shipper';
        $join['ip_receivers'] = 'ip_receivers.receiverid =  ip_moves.receiver';
        $join['ip_carriers'] = 'ip_carriers.carrierid =  ip_moves.carrier';
        $move = $this->mdl_moves->get_data("ip_moves.notes as mvnotes, ip_moves.*,ip_shippers.*,ip_receivers.*,ip_carriers.*",$where,true,$join);

        if (!$move) {
            show_404();
        }

        $this->layout->set( array('move' => $move));
        $this->layout->buffer('content','moves/view');
        $this->layout->render();
    }


    public function delete($moveID)
    {    
        $this->mdl_moves->delete($moveID);
        redirect('moves/'); 
    }
    

    

}
