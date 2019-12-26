<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function get_user_details($user_email)
    {
        $user_details = $this->db->select('*')
            ->from('tbl_users')
            ->where('user_email', $user_email)
            ->get()
            ->row();
            
        return $user_details;
    }
}
