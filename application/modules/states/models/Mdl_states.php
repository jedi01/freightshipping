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
 * Class Mdl_states
 */
class Mdl_states extends Response_Model
{
    public $table = 'ip_state';
    public $primary_key = 'ip_state.state_id';


    public function default_select()
    {
        $this->db->select(
            'SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' .
            'CONCAT(' . $this->table . '.client_name, " ", ' . $this->table . '.client_surname) as client_fullname'
            , false);
    }

    public function default_order_by()
    {
        $this->db->order_by('ip_clients.client_name');
    }

    public function validation_rules()
    {
        return array(
            'client_name' => array(
                'field' => 'client_name',
                'label' => trans('client_name'),
                'rules' => 'required'
            ),
            'client_surname' => array(
                'field' => 'client_surname',
                'label' => trans('client_surname')
            ),
            'client_active' => array(
                'field' => 'client_active'
            ),
            'client_language' => array(
                'field' => 'client_language',
                'label' => trans('language'),
            ),
            'client_address_1' => array(
                'field' => 'client_address_1'
            ),
            'client_address_2' => array(
                'field' => 'client_address_2'
            ),
            'client_city' => array(
                'field' => 'client_city'
            ),
            'client_state' => array(
                'field' => 'client_state'
            ),
            'client_zip' => array(
                'field' => 'client_zip'
            ),
            'client_country' => array(
                'field' => 'client_country'
            ),
            'client_phone' => array(
                'field' => 'client_phone'
            ),
            'client_fax' => array(
                'field' => 'client_fax'
            ),
            'client_mobile' => array(
                'field' => 'client_mobile'
            ),
            'client_email' => array(
                'field' => 'client_email'
            ),
            'client_web' => array(
                'field' => 'client_web'
            ),
            'client_vat_id' => array(
                'field' => 'user_vat_id'
            ),
            'client_tax_code' => array(
                'field' => 'user_tax_code'
            ),
            // SUMEX
            'client_birthdate' => array(
                'field' => 'client_birthdate',
                'rules' => 'callback_convert_date'
            ),
            'client_gender' => array(
                'field' => 'client_gender'
            ),
            'client_avs' => array(
                'field' => 'client_avs',
                'label' => trans('sumex_ssn'),
                'rules' => 'callback_fix_avs'
            ),
            'client_insurednumber' => array(
                'field' => 'client_insurednumber',
                'label' => trans('sumex_insurednumber')
            ),
            'client_veka' => array(
                'field' => 'client_veka',
                'label' => trans('sumex_veka')
            ),
        );
    }

   

    /**
     * @param int $amount
     * @return mixed
     */
    function get_latest($amount = 10)
    {
        return $this->mdl_clients
            ->where('client_active', 1)
            ->order_by('client_id', 'DESC')
            ->limit($amount)
            ->get()
            ->result();
    }

    /**
     * @param $input
     * @return string
     */
    function fix_avs($input)
    {
        if ($input != "") {
            if (preg_match('/(\d{3})\.(\d{4})\.(\d{4})\.(\d{2})/', $input, $matches)) {
                return $matches[1] . $matches[2] . $matches[3] . $matches[4];
            } else if (preg_match('/^\d{13}$/', $input)) {
                return $input;
            }
        }

        return "";
    }

    function convert_date($input)
    {
        $this->load->helper('date_helper');

        if ($input == '') {
            return '';
        }

        return date_to_mysql($input);
    }


    /**
     * @param int $id
     */
    public function delete($id)
    {
        parent::delete($id);

        $this->load->helper('orphan');
        delete_orphans();
    }

   

    public function is_active()
    {
        $this->filter_where('client_active', 1);
        return $this;
    }

}
