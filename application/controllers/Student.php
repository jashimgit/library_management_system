<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Student extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
        $this->load->model('department_model');
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'All Students list';
        $data['result'] = $this->student_model->getAllStudents();

        $data['content'] = $this->load->view('student/studentlist', $data, true);

        $this->load->view('admin/dashboard', $data);
    }


    /**
     *       view Add Student form
     */
    public function show_addstudent_form()
    {

        $data = array();
        $data['title'] = 'Add Student';
        $data['result'] = $this->department_model->getAllDepList();
        $data['content'] = $this->load->view('student/addStudent', $data, true);

        // load dashboard

        $this->load->view('admin/dashboard', $data);
    }

    /**
     *    Store student
     */
}
