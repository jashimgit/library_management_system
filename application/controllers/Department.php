<?php


class Department extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('department_model');
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


    // store department 
    public function store()
    {

        $dep_name = array(
            'dep_name' => $this->input->post('dep_name'),
        );

        // var_dump($dep_name);
        // exit();

        $save_dep = $this->department_model->store_department($dep_name);

        redirect('add-department');
        $message = '';

        if ($save_dep) {

            $message['sucess'] = 'Department Added Successfully';


            // load view with data 
            $this->load->view('department/add_dept_form', $message);
        } else {
            $message['error'] = 'Department Not Added Successfull';


            // load view with data 
            $this->load->view('department/add_dept_form', $message);
        }
    } // end of method

    /**
     *   Show all Department list
     * 
     */
    public function listAllDep()
    {

        $data = array();
        $data['title'] = 'All Departments';
        // Get Results through Department Model 
        $data['results'] =  $this->department_model->getAllDepList();
        $data['content'] = $this->load->view('department/deplist', $data, true);

        // Load dashboard 

        $this->load->view('admin/dashboard', $data);
    } // End of listAllDep method

    /**
     * 
     *   
     */

}
