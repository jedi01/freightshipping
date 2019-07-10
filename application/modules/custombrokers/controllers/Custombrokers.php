<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Custombrokers
 */
class Custombrokers extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_custombrokers');
    }
}

?>