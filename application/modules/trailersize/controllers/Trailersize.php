<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Trailersize
 */
class Trailersize extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_trailersize');
    }
}

?>