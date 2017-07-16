<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uplist
 *
 * @author sunil_12
 */
class Uplist extends My_controller {
    public function __construct() {
        parent::__construct();
          $this->load->model('listmodel');
           //session_start();
      if(!isset($_SESSION['admin']))
      {
          redirect('login');
      }
    }
    public function adminUpdate($id)
    {
        $result['data']= $this->listmodel->getPage('tbl_admin',$id,'id');
       // print_r($result);
       // die('hello');
        $this->addpage('add_admin', $result['data']);
        
    }
    public function categoryUpdate($id)
    {
            $result['data']= $this->listmodel->getPage('tbl_category',$id,'category_id');
       //print_r($result);
       //die('hello');
        $this->addpage('add_category', $result['data']);
          
    }
    public function subcategoryUpdate($id)
    {
        //die('hello');
            $result['data']= $this->listmodel->getPage('tbl_sub_category',$id,'sub_category_id');
       //print_r($result);
       //die('hello');
        $this->addpage('add_sub_category', $result['data']);
          
    }
    public function productUpdate($id)
    {
        $result['data']=$this->listmodel->getPage('tbl_products',$id,'product_id');
        $this->addpage('edit_product',$result['data']);
    }

    public function addpage($page,$data=NULL)
         {
             $result['data']=$data;
             $this->load->view('admin/template/header.php');
             $this->load->view('admin/template/navigation.php');
             if($page=='add_sub_category')
             {
                 $result['category'] =$this->listmodel->getcontent('tbl_category');
                  $this->load->view('admin/pages/'.$page,$result);
             }
             else if($page=='edit_product')
             {
                
                 $result['sub_category']=  $this->listmodel->getcontent('tbl_sub_category');
                  $result['category'] =$this->listmodel->getcontent('tbl_category');
                  $this->load->view('admin/pages/'.$page,$result);
             }
             else {
                 $this->load->view('admin/pages/'.$page,$result);
             }
             $this->load->view('admin/template/footer.php');
         }
    
}
