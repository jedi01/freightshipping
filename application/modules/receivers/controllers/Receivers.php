<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Receivers
 */
class Receivers extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_receiver');
         $this->load->model('states/mdl_states');
    }
    public function index($page = 0)
    {
     
        $this->mdl_receiver->getReceivers()->paginate(site_url('receivers/index/'), $page);
        $receivers = $this->mdl_receiver->result();
       $this->layout->set(array('records' => $receivers));
       $this->layout->buffer('content', 'receivers/receivers');
       $this->layout->render();
    }

    public function form($id = null)
    {
        
        if ($this->input->post('btn_cancel')) {
            redirect('receivers');
        }

        $new_receiver = false;

         // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('receiverid') != '') {
                $new_receiver = true;
            
        }


        if ($this->mdl_receiver->run_validation()) {
            $id = $this->mdl_receiver->save($id);
            if(!$id){
            $this->session->set_flashdata('alert_error', $id);
            redirect('receivers/form/' . $id);
                return;
            } else {
                redirect('receivers/view/' . $id);
            }
        }

        $receiver_custom = "";

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_receiver->prep_form($id)) {
                show_404();
            }

            $this->mdl_receiver->set_form_value('is_update', true);
            $where['receiverid'] = $id;
            $receiver_custom = $this->mdl_receiver->get_data("*",$where,true);
            if ($this->mdl_receiver->num_rows()) {

                foreach ($receiver_custom as $key => $val) {
                    $this->mdl_receiver->set_form_value('custom[' . $key . ']', $val);
                }
        
            }
        } 

               
        $this->load->helper('country');
        $this->load->helper('custom_values');

        $this->layout->set(
            array(
                'id' => $this->mdl_receiver->form_value('receiverid') ? : '',

            )
        );

        $this->layout->buffer('content', 'receivers/form');
        $this->layout->render();
    }

    public function view($id)
    {

        $where['receiverid'] = $id;
        $receiver = $this->mdl_receiver->get_data("*",$where,true);

        if (!$receiver) {
            show_404();
        }

        $this->layout->set( array('receiver' => $receiver));
        $this->layout->buffer('content','receivers/view');
        $this->layout->render();
    }


    public function delete($receiverId)
    {    
        $this->mdl_receiver->delete($receiverId);
        redirect('receivers/'); 
    }
}

?>