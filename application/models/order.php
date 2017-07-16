<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order
 *
 * @author sunil_12
 */
class Order extends My_model {
    public function __construct() {
        parent::__construct();
    }
    public function countOrder()
    {
        $data=array(
            'user_name'=>$_SESSION['user_name']
        );
         $this->db->where($data);
        $this->db->from('tbl_user');
        $result = $this->db->count_all_results();
        if($result=="")
        {
            return 0;
        }
         else {
             return $result;
         }
        
    }
    public function makeOrder($order)
    {
        $this->db->insert('tbl_order',$order);
        return 1;
    }

}
