<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listmodel
 *
 * @author sunil_12
 */
class Listmodel extends My_model {
    private $table=NULL;
    private $id=NULL;
    public function __construct() {
        parent::__construct();
    }
    public function listpage($page)
    {
        $this->tableName($page);
        if($this->table=='tbl_sub_category')
        {
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->join('tbl_category','tbl_category.category_id=tbl_sub_category.category_id');
            $result = $this->db->get();
           return $result->result_array();
           // die('thank you');
        }
        else if($this->table=='tbl_products')
        {
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->join('tbl_sub_category','tbl_products.sub_category_id=tbl_sub_category.sub_category_id');
            $this->db->join('tbl_category','tbl_sub_category.category_id=tbl_category.category_id');
            $result = $this->db->get();
            return $result->result_array();
           // die('thank you');
            
        }
        
        else
        {
             $result = $this->db->get($this->table);
          return $result->result_array();
        }
    }
    public function delete($page,$id)
    {
        $this->tableName($page);
          $data = array(
            $this->id=>$id
        );
         // die($this->table);
          //$this->db->where($data);
        $this->db->delete($this->table,$data);
    }
    public function getcontent($table)
    {
        $result = $this->db->get($table);
        return $result->result_array();
    }
    public function getPage($table,$id,$idname)
    {
        $data= array(
            $idname=>$id,
        );
     $result = $this->db->get_where($table,$data);
     return $result->result_array();
        
    }

    private function tableName($page)
    {
         switch ($page)
        {
            case 'list_admin':
                $this->table='tbl_admin';
                $this->id='id';
               break;
            case 'list_category':
                $this->table='tbl_category';
                $this->id='category_id';
                break;
            case 'list_sub_category':
                $this->table='tbl_sub_category';
                $this->id='sub_category_id';
                break;
            case 'list_product':
                $this->table='tbl_products';
                $this->id='product_id';
                break;
            default:
                $this->table=NULL;
        }
    }
}
