<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author sunil_12
 */
class Product  extends My_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('listproduct');
        $this->load->model('listmodel');
    }
    public function getProduct($category,$sub_category)
    {
        
            
      //  die($sub_category);
        $result['product']=$this->listproduct->getProduct($sub_category);
        if($result['product']=="no")
        {
          echo "<script>alert('Not Avilable')</script>";
          redirect('/home');
        }
        
        $result['category']=  $this->listproduct->getCategory($category);
     
       // print_r($data['category']);
        $data['phone']=9801446191;
        $data['category']=$this->listmodel->listpage('list_category');
        $data['sub_category']=  $this->listmodel->listpage('list_sub_category');
       // print_r($data['category']);
       // die('thank you');
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/pageparts/topbar.php',$data);
    $this->load->view('frontend/pageparts/header.php',$data);
        $this->load->view('frontend/pages/product_list.php',$result);
          $this->load->view('frontend/pageparts/prefooter.php');
        $this->load->view('frontend/template/footer.php');
        
    }
}
