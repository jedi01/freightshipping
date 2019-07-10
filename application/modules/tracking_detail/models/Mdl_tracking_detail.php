<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * InvoicePlane
 *
 * @author      InvoicePlane Developers & Contributors
 * @copyright   Copyright (c) 2012 - 2018 InvoicePlane.com
 * @license     https://invoiceplane.com/license.txt
 * @link        https://invoiceplane.com
 */

/**
 * Class Mdl_tracking_detail
 */
class Mdl_tracking_detail extends Response_Model
{
    public $table = 'ip_trackingdetail';
    public $primary_key = 'ip_trackingdetail.trackingdetailid';


    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }


    public function validation_rules()
    {
        return array(

            'shippingorderid' => array(
                'field' => 'shippingorderid',
                'rules' => 'required'
            ),

            'trackingdate' => array(
                'field' => 'trackingdate',
                'rules' => 'required'
            ),


            'location' => array(
                'field' => 'location',
                'rules' => 'required'
            ),


            'trackingstatus' => array(
                'field' => 'trackingstatus',
                'rules' => 'required'
            ),

            'trackingcomment' => array(
                'field' => 'trackingcomment',
                'rules' => 'required'
            ),

        );
    }

  
    function convert_date($input)
    {
        $this->load->helper('date_helper');

        if ($input == '') {
            return '';
        }

        return date_to_mysql($input);
    }

    public function db_array()
    {
        $db_array = parent::db_array();
        return $db_array;
    }

     public function getTrackingDetails()
    {
        $this->filter_select('IFnull((SELECT SUM(trackingdetailid) FROM ip_trackingdetail), 0) AS tracking', false);
        return $this;
    }


    

    

}
