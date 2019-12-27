<?php


class Department_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *      
     *      <--- Store input data from Controller
     * 
     */

    public function store_department($dep_name)
    {
       $this->db->insert('tbl_department', $dep_name);
       
    }

    /**
     *      get all department list
     */
    public function getAllDepList()
    {
        
        $result = $this->db->select('*')->from('tbl_department')->get()->result();

        return $result;
        
    }
}
