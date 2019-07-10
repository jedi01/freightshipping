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
 * Class Mdl_movestrack
 */
class Mdl_movestrack extends Response_Model
{
    public $table = 'movestrack';
  


    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' , false);
    }


     public function total_moves()
    {
        $this->filter_select('IFnull((SELECT SUM(movesid) FROM movestrack), 0) AS moves', false);
        return $this;
    }

    

    

}
