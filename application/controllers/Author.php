<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Author extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('author_model');
    }


    public function show_add_author_form()
    {
        $data = array();
        $data['title'] = 'Admin Dashboard';
        $data['content'] = $this->load->view('author/add_author', $data, true);

        // load main dashboad 

        $this->load->view('admin/dashboard', $data);
    }
    /**
     *  store Author to DB
     * 
     */
    public function store()
    {
        $data = array(
            'author_name' => $this->input->post('author_name')
        );
        
        $this->author_model->store_author($data);
        redirect('add-author');
    }

    /**
     * 
     *      list all author
     */
    public function listAllAuthor()
    {
        $data = array();
        $data['title'] = 'List all Author';
        $data['results'] = $this->author_model->getAllAuthor();
        $data['content'] = $this->load->view('author/authorlist', $data, true);

        $this->load->view('admin/dashboard', $data);
    }
}
