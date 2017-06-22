<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author sunil_12
 */
class Login  extends My_model{
    public function __construct() {
        parent::__construct();
        
    }
    public function check()
    {
        $data = array(
               'user_nam'=> $this->input->post('user_nam'),
                'pass' => md5($this->input->post('pass'))
                
               );
        //die($data['pass'].$data['user_nam']);
         $this->db->where($data);
          $result=$this->db->get('tbl_admin');
        return $result->num_rows();
        
        
    }
}
