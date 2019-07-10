<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Tracking_detail
 */
class Tracking_detail extends Admin_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('mdl_tracking_detail');
        $this->load->model('shipping/mdl_shipping');
        $this->load->model('tracktrace/mdl_tracktrace');



    }
 

    public function index($page = 0)
    {
       

        $this->mdl_tracking_detail->getTrackingDetails()->paginate(site_url('tracking_detail/index/'), $page);
        $trackingDetails = $this->mdl_tracking_detail->result();

        $this->layout->set(
            array(
                'records' => $trackingDetails,
                'filter_display' => true,
                'filter_placeholder' => trans('filter_tracking'),
                'filter_method' => 'filter_tracking'
            )
        );

        $this->layout->buffer('content', 'tracking_detail/tracking_detail');
        $this->layout->render();
    }


    public function form($id = null)
    {
        

        if ($this->input->post('btn_cancel')) {
            redirect('tracking_detail');
        }

        $new_shipping = false;

         // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('shippingorderid') != '') {
                $new_shipping = true;
            
        }


        if ($this->mdl_tracking_detail->run_validation()) {
            $id = $this->mdl_tracking_detail->save($id);
            if(!$id){
            $this->session->set_flashdata('alert_error', $id);
            redirect('tracking_detail/form/' . $id);
                return;
            } else {
                redirect('tracking_detail/view/' . $id);
            }
        }

        $trackingDetailCustom = "";

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_tracking_detail->prep_form($id)) {
                show_404();
            }

            $this->mdl_tracking_detail->set_form_value('is_update', true);
            $where['trackingdetailid'] = $id;
            $join['ip_tracktrace'] = 'ip_tracktrace.tracktraceid =  ip_trackingdetail.trackingstatus';
            $trackingDetailCustom = $this->mdl_tracking_detail->get_data("*",$where,true,$join);

            if ($this->mdl_tracking_detail->num_rows()) {

                foreach ($trackingDetailCustom as $key => $val) {
                    $this->mdl_tracking_detail->set_form_value('custom[' . $key . ']', $val);
                }
        
            }
        } 

               

        $shippingorders = $this->mdl_shipping->get_data("*");
        $trackingStatus = $this->mdl_tracktrace->get_data("*");
       

        $this->load->helper('country');
        $this->load->helper('custom_values');

        $this->layout->set(
            array(
                'trackingStatus' => $trackingStatus,
                'shippingOrders' => $shippingorders,
                'select_shippingOrder' => $this->mdl_tracking_detail->form_value('shippingorderid') ?:'',
                'select_trackingStatus' => $this->mdl_tracking_detail->form_value('trackingstatus') ?: '',
                'id' => $this->mdl_tracking_detail->form_value('trackingdetailid') ? : '',

            )
        );

        $this->layout->buffer('content', 'tracking_detail/form');
        $this->layout->render();
    }


    public function view($id)
    {
        $where['trackingdetailid'] = $id;
        $join['ip_tracktrace'] = 'ip_tracktrace.tracktraceid =  ip_trackingdetail.trackingstatus';
        $tracking = $this->mdl_tracking_detail->get_data("*",$where,true,$join);

        if (!$tracking) {
            show_404();
        }

        $this->layout->set( array('tracking' => $tracking));
        $this->layout->buffer('content','tracking_detail/view');
        $this->layout->render();
    }


    public function delete($id)
    {    
        $this->mdl_tracking_detail->delete($id);
        redirect('tracking_detail/'); 
    }


    

}
