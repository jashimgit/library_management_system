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
        $this->db->join('tbl_author', 'tbl_author.author_id = tbl_book.author_id', 'left');
        $this->db->join('tbl_department', 'tbl_department.dep_id = tbl_book.dept_id', 'left');
        $result = $this->db->select('*')
            ->from('tbl_book')
            ->get()
            ->result();
        return $result;
    }
}
