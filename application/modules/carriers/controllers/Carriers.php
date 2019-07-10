<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Carriers
 */
class Carriers extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_carriers');
        $this->load->model('states/mdl_states');
    }


    public function index($page = 0)
    {
     
       $this->mdl_carriers->getCarriers()->paginate(site_url('carriers/index/'), $page);
        $carriers = $this->mdl_carriers->result();
       $this->layout->set(array('records' => $carriers));
       $this->layout->buffer('content', 'carriers/carriers');
       $this->layout->render();
    }


    public function form($id = null)
    {
        
        if ($this->input->post('btn_cancel')) {
            redirect('carriers');
        }

        $new_carrier = false;

         // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('carrierid') != '') {
                $new_carrier = true;
            
        }


        if ($this->mdl_carriers->run_validation()) {
            $id = $this->mdl_carriers->save($id);
            if(!$id){
            $this->session->set_flashdata('alert_error', $id);
            redirect('carriers/form/' . $id);
                return;
            } else {
                redirect('carriers/view/' . $id);
            }
        }

        $carrier_custom = "";

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_carriers->prep_form($id)) {
                show_404();
            }

            $this->mdl_carriers->set_form_value('is_update', true);
            $where['carrierid'] = $id;
          	$join['ip_state'] = 'ip_state.state_id =  ip_carriers.prov';
            $carrier_custom = $this->mdl_carriers->get_data("*",$where,true,$join);
            if ($this->mdl_carriers->num_rows()) {

                foreach ($carrier_custom as $key => $val) {
                    $this->mdl_carriers->set_form_value('custom[' . $key . ']', $val);
                }
        
            }
        } 

               

        $states = $this->mdl_states->get_data("*");
    
 
        $this->load->helper('country');
        $this->load->helper('custom_values');

        $this->layout->set(
            array(
                'states' => $states,
                'select_state' => $this->mdl_carriers->form_value('prov') ?:'',
                'id' => $this->mdl_carriers->form_value('carrierid') ? : '',

            )
        );

        $this->layout->buffer('content', 'carriers/form');
        $this->layout->render();
    }

    public function view($id)
    {

        $where['carrierid'] = $id;
        $join['ip_state'] = 'ip_state.state_id =  ip_carriers.prov';
        $carrier = $this->mdl_carriers->get_data("*",$where,true,$join);

        if (!$carrier) {
            show_404();
        }

        $this->layout->set( array('carrier' => $carrier));
        $this->layout->buffer('content','carriers/view');
        $this->layout->render();
    }


    public function delete($carrierId)
    {    
        $this->mdl_carriers->delete($carrierId);
        redirect('carriers/'); 
    }

}

?>