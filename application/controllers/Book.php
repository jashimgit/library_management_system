<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('department_model');
        $this->load->model('author_model');
    }

    public function show_addbook_form()
    {
        $data = array();
        $data['title'] = 'Admin Dashboard';
        $data['department'] = $this->department_model->getAllDepList();
        $data['author'] = $this->author_model->getAllAuthor();
        $data['content'] = $this->load->view('book/add_book', $data, true);

        // load main dashboad 

        $this->load->view('admin/dashboard', $data);
    }
}
