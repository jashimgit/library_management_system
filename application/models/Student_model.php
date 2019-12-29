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

    public function save()
    {
        $data = array(
            's_name'    => $this->input->post('s_name'),
            'dep_id'    => $this->input->post('dep_id'),
            's_roll'    => $this->input->post('s_roll'),
            's_reg'     => $this->input->post('s_reg'),
            's_session' => $this->input->post('s_session'),
            's_batch'   => $this->input->post('s_batch')
        );
        $this->db->insert('tbl_student', $data);
    }
}
