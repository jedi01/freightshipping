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
 * Class Mdl_tracktrace
 */
class Mdl_tracktrace extends Response_Model
{
    public $table = 'ip_tracktrace';
    public $primary_key = 'ip_tracktrace.tracktraceid';


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

            'carrier' => array(
                'field' => 'carrier',
                'rules' => 'required'
            ),


            'shipper' => array(
                'field' => 'shipper',
                'rules' => 'required'
            ),


            'receiver' => array(
                'field' => 'receiver',
                'rules' => 'required'
            ),

            'moverate' => array(
                'field' => 'moverate',
                'rules' => 'required'
            ),

            'movetaxrate' => array(
                'field' => 'movetaxrate',
                'rules' => 'required'
            ),

            'movefsc' => array(
                'field' => 'movefsc',
                'rules' => 'required'
            ),

            'pickupnum' => array(
                'field' => 'pickupnum',
                'rules' => 'required'
            ),


            'servicecode' => array(
                'field' => 'servicecode',
                'rules' => 'required'
            ),

            'notes' => array(
                'field' => 'notes',
                'rules' => 'required'
            ),

            'instructions' => array(
                'field' => 'instructions',
                'rules' => 'required'
            ),

            'pickupdate' => array(
                'field' => 'pickupdate',
                'rules' => 'required'
            ),

            'deldate' => array(
                'field' => 'deldate',
                'rules' => 'required'
            ),


            'puappt' => array(
                'field' => 'puappt',
                'rules' => 'required'
            ),

            'delappt' => array(
                'field' => 'delappt',
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

    

    

}
