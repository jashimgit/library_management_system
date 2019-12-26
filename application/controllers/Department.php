<?php


class Department extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
    }


    // view add department form

    public function show_add_dept_form()
    {
        $data = array();
        $data['title'] = 'Add Department';
        $data['content'] = $this->load->view('department/add_dept_form', $data, TRUE);

        // Load master dashboard

        $this->load->view('admin/dashboard', $data);
    }
}
