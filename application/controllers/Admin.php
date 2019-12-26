<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }



    public function index()
    {
        $data = array();
        $data['title'] = 'Admin Dashboard';
        $data['content'] = $this->load->view('admin/content', $data, true);

        // load main dashboad 

        $this->load->view('admin/dashboard', $data);
        
    }
}