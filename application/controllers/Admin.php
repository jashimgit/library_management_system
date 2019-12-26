<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }



    public function index()
    {
        $this->load->view('admin/admin_login');
    }



    // check input data and process login

    public function check_admin_login()
    {
        $user_email = $this->input->post('user_email');
        $password = $this->input->post('user_password');

        // $encripted_password = password_hash($password, PASSWORD_DEFAULT);

        $user_details = $this->admin_model->get_user_details($user_email);

        if (password_verify($password, $user_details->user_password )) {

            $data = array();
            $data['title'] = 'Admin Dashboard';
            $data['content'] = $this->load->view('admin/content', $data, true);

            // load main dashboad 
            $this->load->view('admin/dashboard', $data);
        } else {

            $message['error'] = 'Incorrect Email or Password';
            $this->load->view('admin/admin_login', $message);
        }
    }


    public function logout()
    {
        session_unset();
        redirect('admin');
    }
}
