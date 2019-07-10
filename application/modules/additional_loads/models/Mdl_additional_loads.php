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
class Mdl_additional_loads extends Response_Model
{
    public $table = 'ip_additional_loads';
    public $primary_key = 'ip_additional_loads.additional_id';


    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }


    public function validation_rules()
    {
        return array(

            'customer' => array(
                'field' => 'customer',
                'rules' => 'required'
            ),
            'pickupdate' => array(
                'field' => 'pickupdate',
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
            'origincarrier' => array(
                'field' => 'origincarrier',
                'rules' => 'required'
            ),
            'pickuptime' => array(
                'field' => 'pickuptime',
                'rules' => 'required'
            ),
            'shipping_order_id' => array(
                'field' => 'shipping_order_id',
                'rules' => 'required'
            ),
            'punotes' => array(
                'field' => 'punotes',
                'rules' => 'required'
            ),
            'orderdate' => array(
                'field' => 'orderdate',
                'rules' => 'required'
            ),
            'bol' => array(
                'field' => 'bol',
                'rules' => 'required'
            ),
            'orderstatus' => array(
                'field' => 'orderstatus',
                'rules' => 'required'
            ),
            'trailernum' => array(
                'field' => 'trailernum',
                'rules' => 'required'
            ),
            'netweight' => array(
                'field' => 'netweight',
                'rules' => 'required'
            ),
            'seal' => array(
                'field' => 'seal',
                'rules' => 'required'
            ),
            'piececount' => array(
                'field' => 'piececount',
                'rules' => 'required'
            ),
            'trailersize' => array(
                'field' => 'trailersize',
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
            'etadate' => array(
                'field' => 'etadate',
                'rules' => 'required'
            ),
            'destcarrier' => array(
                'field' => 'destcarrier',
                'rules' => 'required'
            ),
            'deldate' => array(
                'field' => 'deldate',
                'rules' => 'required'
            ),
            'delappt' => array(
                'field' => 'delappt',
                'rules' => 'required'
            ),
            'delnotes' => array(
                'field' => 'delnotes',
                'rules' => 'required'
            ),
            'rate' => array(
                'field' => 'rate',
                'rules' => 'required'
            ),
            'fsc' => array(
                'field' => 'fsc',
                'rules' => 'required'
            ),
            'currency' => array(
                'field' => 'currency',
                'rules' => 'required'
            ),
            'railcompleted' => array(
                'field' => 'railcompleted',
                'rules' => 'required'
            ),
            'truckcompleted' => array(
                'field' => 'truckcompleted',
                'rules' => 'required'
            ),
            'delivered' => array(
                'field' => 'delivered',
                'rules' => 'required'
            ),
            'customscleared' => array(
                'field' => 'customscleared',
                'rules' => 'required'
            ),
            'invoicesubmitted' => array(
                'field' => 'invoicesubmitted',
                'rules' => 'required'
            ),
            'Brokerid' => array(
                'field' => 'Brokerid',
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

     public function getadditional_loads()
    {
        $this->filter_select('IFnull((SELECT SUM(additional_id) FROM ip_additional_loads), 0) AS tracking', false);
        return $this;
    }


    

    

}
