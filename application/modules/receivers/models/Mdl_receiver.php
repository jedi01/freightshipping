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
 * Class Mdl_receiver
 */
class Mdl_receiver extends Response_Model
{
    public $table = 'ip_receivers';
    public $primary_key = 'ip_receivers.receiverid';


    public function default_select()
    {
       $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }

    public function default_order_by()
    {
        $this->db->order_by('ip_receivers.receivername');
    }

     public function getReceivers()
    {
        $this->filter_select('IFnull((SELECT SUM(receiverid) FROM ip_receivers), 0) AS receivers', false);
        return $this;
    }

    public function validation_rules()
    {
        return array(
            'receivername' => array(
                'field' => 'receivername',
                'label' => trans('receivername'),
                'rules' => 'required'
            ),
            'address' => array(
                'field' => 'address',
                'label' => trans('address')
            ),
            'city' => array(
                'field' => 'city'
            ),
            'prov' => array(
                'field' => 'prov',
                'label' => trans('language'),
            ),
            'postal' => array(
                'field' => 'postal'
            ),
            'country' => array(
                'field' => 'country'
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
            'notes' => array(
                'field' => 'notes'
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
