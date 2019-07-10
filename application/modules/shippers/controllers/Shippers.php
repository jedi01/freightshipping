<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Shippers
 */
class Shippers extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_shippers');
        $this->load->model('states/mdl_states');
    }


    public function index($page = 0)
    {
     
        $this->mdl_shippers->getShippers()->paginate(site_url('shippers/index/'), $page);
        $shippers = $this->mdl_shippers->result();
       $this->layout->set(array('records' => $shippers));
       $this->layout->buffer('content', 'shippers/shippers');
       $this->layout->render();
    }

    public function form($id = null)
    {
        
        if ($this->input->post('btn_cancel')) {
            redirect('shippers');
        }

        $new_shipper = false;

         // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('shipperid') != '') {
                $new_shipper = true;
            
        }


        if ($this->mdl_shippers->run_validation()) {
            $id = $this->mdl_shippers->save($id);
            if(!$id){
            $this->session->set_flashdata('alert_error', $id);
            redirect('shippers/form/' . $id);
                return;
            } else {
                redirect('shippers/view/' . $id);
            }
        }

        $shipper_custom = "";

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_shippers->prep_form($id)) {
                show_404();
            }

            $this->mdl_shippers->set_form_value('is_update', true);
            $where['shipperid'] = $id;
          	$join['ip_state'] = 'ip_state.state_id =  ip_shippers.prov';
            $shipper_custom = $this->mdl_shippers->get_data("*",$where,true,$join);
            if ($this->mdl_shippers->num_rows()) {

                foreach ($shipper_custom as $key => $val) {
                    $this->mdl_shippers->set_form_value('custom[' . $key . ']', $val);
                }
        
            }
        } 

               

        $states = $this->mdl_states->get_data("*");
    
 
        $this->load->helper('country');
        $this->load->helper('custom_values');

        $this->layout->set(
            array(
                'states' => $states,
                'select_state' => $this->mdl_shippers->form_value('prov') ?:'',
                'id' => $this->mdl_shippers->form_value('shipperid') ? : '',

            )
        );

        $this->layout->buffer('content', 'shippers/form');
        $this->layout->render();
    }

    public function view($id)
    {

        $where['shipperid'] = $id;
        $join['ip_state'] = 'ip_state.state_id =  ip_shippers.prov';
        $shipper = $this->mdl_shippers->get_data("*",$where,true,$join);

        if (!$shipper) {
            show_404();
        }

        $this->layout->set( array('shipper' => $shipper));
        $this->layout->buffer('content','shippers/view');
        $this->layout->render();
    }


    public function delete($shipperId)
    {    
        $this->mdl_shippers->delete($shipperId);
        redirect('shippers/'); 
    }
}

?>