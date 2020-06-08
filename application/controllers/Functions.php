<?php

class Sessions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('database');
    }

    public function regExp_pattern_login($username)
    {
        $username = 'Quentin';

        if (preg_match('^[a-zA-z0-9]$', $username)) {
            echo 'True';
        } else {
            echo 'False';
        }
    }

    public function rexExp_pattern_login_same_value()
    {
        $username = 'Quentin';
        $username1 = 'Quentin';
        $rexExp_login_same_value = preg_match($username, $username1);
    }
}
