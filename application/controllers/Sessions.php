<?php

class Sessions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('database');
    }

    public function control()
    {
        if ($this->session->userdata('acc_username') == TRUE) {
            echo 'Username a été déposé';
        } else {
            echo 'acc_username n\'a pas été déposé';
        }
    }
}
