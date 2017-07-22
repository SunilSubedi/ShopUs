<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of check
 *
 * @author sunil_12
 */
class Check  extends My_controller{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
        
        $user_name = $_POST['user_name'];
       //  echo '<p>user_name</p>';
        
        $result=  $this->find_user($user_name);
        if($result>0)
        {
            echo "<span style='color:red'>User Name already Present</span>";
            
        }
    }
    public function find_user($user_name)
    {
        $data=array(
            'user_name'=>$user_name
        );
       $result=$this->db->get_where('tbl_user',$data);
       return $result->num_rows();
    }
   
    //put your code here
}
