<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
       
        // redirect user to dashboard if logged in to dashboard
        // if not logged in then redirect to login page

        if (isset($this->session->user_id)) {
            redirect('dashboard');
        } else {
            $this->load->view('admin/admin_login');
        }
    }


    // load admin login page 
    public function index()
    {

        $this->load->view('admin/admin_login');
    }


    /**
     * check input data and process login process user input data 
     * validate data , if validated 
     * login user else redirect to login page
     */

    public function check_admin_login()
    {
        $user_email = $this->input->post('user_email');
        $password = $this->input->post('user_password');

        // Get data from DB and return data
        $user_details = $this->admin_model->get_user_details($user_email);

        if (password_verify($password, $user_details->user_password)) {
            if ($user_details->user_status == 1) {
                $session_data = array(
                    'user_email' => $user_details->user_email,
                    'user_status' => $user_details->user_status,
                    'user_id' => $user_details->user_id,
                    'user_role' => $user_details->user_role,
                );

                // Set session data for user 
                $this->session->set_userdata($session_data);

                redirect('dashboard');
            } else {
                // Show error message and redirect to login page
                $message['error'] = 'Invalid User';
                $this->load->view('admin/admin_login', $message);
            }
        } else {

            $message['error'] = 'Incorrect Email or Password';
            $this->load->view('admin/admin_login', $message);
        }
    } //<--- End of admin login check 



} // <--- End of Admin controller activities 
