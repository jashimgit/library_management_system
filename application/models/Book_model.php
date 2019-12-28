<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addBooks($data)
    {
        $this->db->insert('tbl_book', $data);
        
    }
    public function getAllBooks()
    {
        $result = $this->db->select('*')->from('tbl_book')->get()->result();
        return $result;
    }
}