<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author sunil_12
 */
class User extends My_model {
    public function __construct() {
        parent::__construct();
    }
    public function addUser()
    {
        $data = array(
            'full_name' => $this->input->post('full_name'),
            'user_name' => $this->input->post('user_name'),
            'email' => $this->input->post('email'),
            'phone_no' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'password' => md5($this->input->post('password')),
            'gender' => $this->input->post('gender')
        );
        $this->db->insert('tbl_user',$data);
        return true;
    }
    public function getUser($count)
    {
        $data = array(
          'email' => $this->input->post('email'),
           'password'=>  md5($this->input->post('password'))
        );
        
        $result = $this->db->get_where('tbl_user',$data);
        if($count=='count')
        {
        return $result->num_rows();
        }
        else
        {
            return $result->row();
        }
    }
}
