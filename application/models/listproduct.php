<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listproduct
 *
 * @author sunil_12
 */
class Listproduct extends My_model {
    public function __construct() {
        parent::__construct();
    }
    public function getProduct($data)
    {
        //die($data);
        $this->db->select('*');
            $this->db->from('tbl_products');
            $this->db->join('tbl_sub_category','tbl_products.sub_category_id=tbl_sub_category.sub_category_id');
            $this->db->where('tbl_products.sub_category_id',$data);
            
            $result = $this->db->get();
            if($result->num_rows()>0)
            {
                 return ($result->result_array());
            }
            else {
              return "no";
            }
          
            //die('thank u');
            
            
    }
    public function getCategory($data)
    {
        $result=$this->db->get_where('tbl_category',array('category_id'=>$data));
        return $result->result_array();
    }
}
