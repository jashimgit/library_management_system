<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        /**
         * check user session for available session data 
         * if no data found then user will redirect to 
         *  login page
         */
       if(!isset($this->session->user_id) && ($this->session->user_status !== 1) && ($this->session->user_role !== 1)){
        redirect('admin');
       }
    }

    public function show_dashboard()
    {
        $data = array();
        $data['title'] = 'Admin Dashboard';
        $data['content'] = $this->load->view('admin/content', $data, true);

        // load main dashboad 
        $this->load->view('admin/dashboard', $data);
    }

    // logout

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
        
    }
}
