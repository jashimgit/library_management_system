<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Student extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
        $this->load->model('department_model');
        $this->load->library('form_validation');


        $data = array();
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
        $data['title'] = 'Add Student';
        $data['result'] = $this->department_model->getAllDepList();
        $data['content'] = $this->load->view('student/addStudent', $data, true);

        // load dashboard

        $this->load->view('admin/dashboard', $data);
    }

    /**
     *    Store student
     */
    public function store()
    {

        $this->form_validation->set_rules('s_name', 'Student Name', 'required|trim');
        $this->form_validation->set_rules('dep_id', 'Department Name', 'required|trim');
        $this->form_validation->set_rules('s_roll', 'Roll Number', 'required|trim');
        $this->form_validation->set_rules('s_reg', 'Registration number', 'required|trim');
        $this->form_validation->set_rules('s_session', 'Session', 'required|trim');
        $this->form_validation->set_rules('s_batch', 'Batch', 'required|trim');


        if ($this->form_validation->run()) {
            $this->student_model->save();

            // $data['success_message'] = 'Student Added successfully';
            $this->session->set_flashdata('success', 'Student added successfully');
            redirect('student');
        } else {
            // $this->show_addstudent_form();
            $data['title'] = 'Add Student';
            $data['result'] = $this->department_model->getAllDepList();
            $data['content'] = $this->load->view('student/addStudent', $data, true);

            // load dashboard

            $this->load->view('admin/dashboard', $data);
        }
    } // <--- ./ End of Store method
}
