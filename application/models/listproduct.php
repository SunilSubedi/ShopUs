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
    public function getProduct($data,$category_id)
    {
        
       // $offset-=1;
        //$where = "='$data' limit $limit offset $offset";
        //die($data);
        $this->db->select('*');
            $this->db->from('tbl_products');
            $this->db->join('tbl_sub_category','tbl_products.sub_category_id=tbl_sub_category.sub_category_id');
            $this->db->where("tbl_products.sub_category_id",$data);
            $this->db->where("tbl_products.category_id",$category_id);
            $this->db->where("status","active");
                $result = $this->db->get();
            if($result->num_rows()>0)
            {
                 //print_r($result);
                //echo"<script>alert('Heloo')";
                 return ($result->result_array());
            }
            else {
               /// print_r($result);
               // die($offset);
             return "no";
            }
          
            //die('thank u');
            
            
    }
    public function getCategory($data)
    {
        $result=$this->db->get_where('tbl_category',array('category_id'=>$data));
        return $result->result_array();
    }
    public function total()
    {
        $result = $this->db->get('tbl_products');
        return $result->num_rows();
    }
    public function getsingle($id)
    {
        $result = $this->db->get_where('tbl_products',array('product_id'=>$id));
        return $result->row();
    }
    public function get_newProduct()
    {
        $this->db->order_by('product_id',"desc");
        $this->db->limit(5);
        $result = $this->db->get_where('tbl_products',array('status'=>'active'));
         return $result->result_array();
         //die('heello');
        
    }
    public function get_threeProduct($limit)
    {
        $this->db->limit($limit);
        $result = $this->db->get_where('tbl_products',array('status'=>'active'));
         return $result->result_array();
        
         
    }
    public function getImage()
    {
        $this->db->select('product_img');
        $this->db->from('tbl_products');
        $this->db->order_by('product_id',"desc");
        $this->db->limit(4);
        $result = $this->db->get();
        return $result->result_array();
        
    }
}
