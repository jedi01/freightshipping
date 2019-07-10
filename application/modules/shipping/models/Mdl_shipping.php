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
 * Class Mdl_shipping
 */
class Mdl_shipping extends Response_Model
{
    public $table = 'ip_shipping';
    public $primary_key = 'ip_shipping.id';


    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }


    public function validation_rules()
    {
        // return array(

        //     'shippingorderid' => array(
        //         'field' => 'shippingorderid',
        //         'rules' => 'required'
        //     ),

        //     'customer' => array(
        //         'field' => 'customer',
        //         'rules' => 'required'
        //     ),

        //     'pickupdate' => array(
        //         'field' => 'pickupdate',
        //         'rules' => 'required'
        //     ),

        //     'shipper' => array(
        //         'field' => 'shipper',
        //         'rules' => 'required'
        //     ),


        //     'receiver' => array(
        //         'field' => 'receiver',
        //         'rules' => 'required'
        //     ),

        //     'customernumber' => array(
        //         'field' => 'customernumber',
        //         'rules' => 'required'
        //     ),

        //     'orderdate' => array(
        //         'field' => 'orderdate',
        //         'rules' => 'required'
        //     ),

        //     'orderstatus' => array(
        //         'field' => 'orderstatus',
        //         'rules' => 'required'
        //     ),

        //     'destinationhub' => array(
        //         'field' => 'destinationhub',
        //         'rules' => 'required'
        //     ),


        //     'routing' => array(
        //         'field' => 'routing',
        //         'rules' => 'required'
        //     ),
        //     'origincarrier' => array(
        //         'field' => 'origincarrier',
        //         'rules' => 'required'
        //     ),

        //     'pickuptime' => array(
        //         'field' => 'pickuptime',
        //         'rules' => 'required'
        //     ),

        //     'punotes' => array(
        //         'field' => 'punotes',
        //         'rules' => 'required'
        //     ),

        //     'bol' => array(
        //         'field' => 'bol',
        //         'rules' => 'required'
        //     ),


        //     'destcarrier' => array(
        //         'field' => 'destcarrier',
        //         'rules' => 'required'
        //     ),
        //     'trackingstatus' => array(
        //         'field' => 'trackingstatus',
        //         'rules' => 'required'
        //     ),

        //     'trackingdetail' => array(
        //         'field' => 'trackingdetail',
        //         'rules' => 'required'
        //     ),

        //     'trailernum' => array(
        //         'field' => 'trailernum',
        //         'rules' => 'required'
        //     ),

        //     'netweight' => array(
        //         'field' => 'netweight',
        //         'rules' => 'required'
        //     ),


        //     'seal' => array(
        //         'field' => 'seal',
        //         'rules' => 'required'
        //     ),

        //     'piececount' => array(
        //         'field' => 'piececount',
        //         'rules' => 'required'
        //     ),

        //     'trailersize' => array(
        //         'field' => 'trailersize',
        //         'rules' => 'required'
        //     ),


        //     'trailertype' => array(
        //         'field' => 'trailertype',
        //         'rules' => 'required'
        //     ),

        //     'etadate' => array(
        //         'field' => 'etadate',
        //         'rules' => 'required'
        //     ),

        //     'notes' => array(
        //         'field' => 'notes',
        //         'rules' => 'required'
        //     ),

        //     'instructions' => array(
        //         'field' => 'instructions',
        //         'rules' => 'required'
        //     ),

        //     'deldate' => array(
        //         'field' => 'deldate',
        //         'rules' => 'required'
        //     ),

        //     'delappt' => array(
        //         'field' => 'delappt',
        //         'rules' => 'required'
        //     ),

        //     'delnotes' => array(
        //         'field' => 'delnotes',
        //         'rules' => 'required'
        //     ),

        //     'rate' => array(
        //         'field' => 'rate',
        //         'rules' => 'required'
        //     ),

        //     'fsc' => array(
        //         'field' => 'fsc',
        //         'rules' => 'required'
        //     ),

        //     'currency' => array(
        //         'field' => 'currency',
        //         'rules' => 'required'
        //     ),

        //     'railcompleted' => array(
        //         'field' => 'railcompleted',
        //         'rules' => 'required'
        //     ),

        //     'truckcompleted' => array(
        //         'field' => 'truckcompleted',
        //         'rules' => 'required'
        //     ),

        //     'delivered' => array(
        //         'field' => 'delivered',
        //         'rules' => 'required'
        //     ),

        //     'customscleared' => array(
        //         'field' => 'customscleared',
        //         'rules' => 'required'
        //     ),

        //     'invoicesubmitted' => array(
        //         'field' => 'invoicesubmitted',
        //         'rules' => 'required'
        //     ),

        //     'dispatcher' => array(
        //         'field' => 'dispatcher',
        //         'rules' => 'required'
        //     ),


        //     'brokerid' => array(
        //         'field' => 'brokerid',
        //         'rules' => 'required'
        //     ),

            
            
        // );
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
