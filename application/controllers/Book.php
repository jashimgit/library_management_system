<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('department_model');
        $this->load->model('author_model');
        $this->load->model('book_model');

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

    /**
     *  Store book data
     */
    public function store()
    {
        $data = array(
            'book_name' => $this->input->post('book_name'),
            'dept_id' => $this->input->post('dept_id'),
            'author_id' => $this->input->post('author_id'),
            'book_des' => $this->input->post('book_des')
        );

        $this->book_model->addBooks($data);

        if ($result) {
            $this->session->set_flashdata('success', 'Book added Successfully');
        }
        redirect('book-list');
    }


    public function getAllBooks()
    {
        echo 'all books';
    }
}
