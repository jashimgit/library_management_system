<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Student extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     *       view Add Student form
     */
    public function show_addstudent_form()
    {

        $data = array();
        $data['title'] = 'Add Student';
        $data['content'] = $this->load->view('student/addStudent', $data, true);

        // load dashboard

        $this->load->view('admin/dashboard', $data);
    }
}
