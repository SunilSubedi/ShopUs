<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addmodel
 *
 * @author sunil_12
 */
class Addmodel extends My_model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function addAdmin()
    {
        $data = array(
            'first_name'=>  $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email'=> $this->input->post('email'),
            'user_nam' => $this->input->post('user_name'),
            'phone' =>$this->input->post('phone'),
            'pass' => md5($this->input->post('password'))
        );
        if($this->input->post('id')==NULL)
        {
        $this->db->insert('tbl_admin',$data);
        return true;
        }
        else
        {
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('tbl_admin',$data);
            return true;
        }
    }
    public function addCategory()
    {
        $data = array(
            'category_name'=> $this->input->post('category_name')
            
        );
        
     if($this->input->post('id')==NULL)
        {
        $this->db->insert('tbl_category',$data);
        return true;
        }
        else
        {
            $this->db->where('category_id',$this->input->post('id'));
            $this->db->update('tbl_category',$data);
            return true;
        }
    }
    public function addSubcategory()
    {
        $data = array(
            'category_id'=>  $this->input->post('category_id'),
            'sub_category_name'=> $this->input->post('sub_category_name')
            );
         if($this->input->post('id')==NULL)
        {
        $this->db->insert('tbl_sub_category',$data);
        return true;
        }
        else
        {
            $this->db->where('sub_category_id',$this->input->post('id'));
            $this->db->update('tbl_sub_category',$data);
            return true;
        }
        
    }
    public function addProduct()
    {
        $data = array(
            'sub_category_id' => $this->input->post('sub_category_id'),
            'product_img'=>  $this->upload->data('file_name'),
            'product_title'=>  $this->input->post('product_title'),
            'product_disc'=> $this->input->post('product_disc'),
            'product_size'=> $this->input->post('product_size'),
            'product_price'=> $this->input->post('product_price'),
            'status'=>$this->input->post('status')
            
        );
        $this->db->insert('tbl_products',$data);
        return true;
    }
}
