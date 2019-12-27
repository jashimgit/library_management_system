<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Author_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store_author($data)
    {

        $this->db->insert('tbl_author', $data);
    }

    // get all author 

    public function getAllAuthor()
    {
        $results = $this->db->select('*')->from('tbl_author')->get()->result();
        return $results;
    }
}
