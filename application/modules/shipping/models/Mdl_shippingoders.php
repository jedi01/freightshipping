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
 * Class Mdl_shippingoders
 */
class Mdl_shippingoders extends Response_Model
{
    public $table = 'shippingoders';
  
    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }

    public function getShippings()
    {
        $this->filter_select('IFnull((SELECT SUM(id) FROM shippingoders), 0) AS shipping', false);
        return $this;
    }


}
