<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Author extends CI_Controller
{
 
    

    public function show_add_author_form()
    {
        $data = array();
        $data['title'] = 'Admin Dashboard';
        $data['content'] = $this->load->view('author/add_author', $data, true);

        // load main dashboad 

        $this->load->view('admin/dashboard', $data);
    }
}