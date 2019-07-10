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
 * Class Mdl_carriers
 */
class Mdl_carriers extends Response_Model
{
    public $table = 'ip_carriers';
    public $primary_key = 'ip_carriers.carrierid';


    public function default_select()
    {
       $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }

    public function default_order_by()
    {
        $this->db->order_by('ip_carriers.carriername');
    }

    public function validation_rules()
    {
        return array(
            'carriername' => array(
                'field' => 'carriername',
                'label' => trans('carriername'),
                'rules' => 'required'
            ),
            'address1' => array(
                'field' => 'address1',
                'label' => trans('address1')
            ),
            'address2' => array(
                'field' => 'address2'
            ),
            'city' => array(
                'field' => 'city',
                'label' => trans('city'),
            ),
            'prov' => array(
                'field' => 'prov'
            ),
            'country' => array(
                'field' => 'country'
            ),
            'postal' => array(
                'field' => 'postal'
            ),
            'contact' => array(
                'field' => 'contact'
            ),
            'phone' => array(
                'field' => 'phone'
            ),
            'fax' => array(
                'field' => 'fax'
            ),
            'email' => array(
                'field' => 'email'
            ),
            'website' => array(
                'field' => 'website'
            ),
            'insuranceconfirm' => array(
                'field' => 'insuranceconfirm'
            ),
            'insuranceexp' => array(
                'field' => 'insuranceexp'
            ),
            'WSIB' => array(
                'field' => 'WSIB'
            ),
            'WCB' => array(
                'field' => 'WCB'
            ),
            'notes' => array(
                'field' => 'notes'
            ),
            // SUMEX
            'lanes' => array(
                'field' => 'lanes',
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

     public function getCarriers()
    {
        $this->filter_select('IFnull((SELECT SUM(carrierid) FROM ip_carriers), 0) AS carrriers', false);
        return $this;
    }

   
   

}
