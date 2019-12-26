<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{



    public function show_addbook_form()
    {
        $data = array();
        $data['title'] = 'Admin Dashboard';
        $data['content'] = $this->load->view('book/add_book', $data, true);

        // load main dashboad 

        $this->load->view('admin/dashboard', $data);
    }
}
