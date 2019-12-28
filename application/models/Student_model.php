<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllStudents()
    {

        $this->db->join('tbl_department', 'tbl_department.dep_id = tbl_student.dep_id', 'left');

        return $this->db->select('*')
            ->from('tbl_student')
            ->get()
            ->result();
    }
}
