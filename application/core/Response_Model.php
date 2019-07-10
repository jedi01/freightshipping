<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * InvoicePlane
 *
 * @author		InvoicePlane Developers & Contributors
 * @copyright	Copyright (c) 2012 - 2018 InvoicePlane.com
 * @license		https://invoiceplane.com/license.txt
 * @link		https://invoiceplane.com
 */

/**
 * Class Response_Model
 */
class Response_Model extends Form_Validation_Model
{
   
    /**
     * @param null|int   $id
     * @param null|array $db_array
     *
     * @return null|int
     */
    public function save($id = null, $db_array = null)
    {   


        if ($id) {
            $this->session->set_flashdata('alert_success', trans('record_successfully_updated'));
            parent::save($id, $db_array);
        } else {
            $this->session->set_flashdata('alert_success', trans('record_successfully_created'));
            $id = parent::save(null, $db_array);
        }

        return $id;
    }

    /**
     * @param int $id
     */
    public function delete($id)
    {
        parent::delete($id);
        $this->session->set_flashdata('alert_success', trans('record_successfully_deleted'));
    }


    public function add_data($data){
        $res = $this->db->insert($this->table, $data);
        return $this->db->insert_id();

    }

    public function update_data($where,$data){

        $this->db->where($where);
        $res = $this->db->update($this->table, $data);
        return $res;
    }



public function get_data($select = "",$where = array(),$single_row = false,$join = array(), $like = array(),$or_where = "",$where_in = "", $order_by = "" ,$odr_method=""){

        
        $this->db->select($select);
       
        $this->db->from($this->table);
        
        
        if (!empty($join)) {
            foreach ($join as $key => $value) {
                $this->db->join($key,$value);
            }
        }

        if (!empty($where)) {
            $this->db->where($where);
        }


        if (!empty($or_where)) {
            $this->db->or_where($or_where);
        }       
        
        if (!empty($where_in)) {
            
            foreach ($where_in as $key => $value) {
                $this->db->where_in($key, $value);
            }
            
        }

        if (!empty($like)) {
            $this->db->like($like);
        }

        if ($single_row) {
            
            if (!empty($order_by)) {
                $this->db->order_by($order_by,$odr_method);
            }

            $res = $this->db->get()->row();

        }else{

            if (!empty($order_by)) {
                $this->db->order_by($order_by,$odr_method);
            }

            

            

            $res = $this->db->get()->result();

        }

        return $res;

    }
}
