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
 * Class Mdl_shippers
 */
class Mdl_shippers extends Response_Model
{
    public $table = 'ip_shippers';
    public $primary_key = 'ip_shippers.shipperid';


    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }

    public function default_order_by()
    {
        $this->db->order_by('ip_shippers.shippername');
    }

      public function getShippers()
    {
        $this->filter_select('IFnull((SELECT SUM(shipperid) FROM ip_shippers), 0) AS shippers', false);
        return $this;
    }

    public function validation_rules()
    {
        return array(
            'shippername' => array(
                'field' => 'shippername',
                'label' => trans('shippername'),
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
