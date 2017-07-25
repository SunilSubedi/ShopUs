<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author sunil_12
 */
class Admin extends My_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('listmodel');
        $this->load->model('order');
           //session_start();
      if(!isset($_SESSION['admin']))
      {
          redirect('login');
      }
    }
        public function index($page='home')
         {
            if($page==='home')
            {
             $this->load->view('admin/template/header.php');
             $this->load->view('admin/template/navigation.php');
             $this->load->view('admin/pages/'.$page);
             $this->load->view('admin/template/footer.php');
            }
            else
            {
              
               $data['result']=$this->listmodel->listpage($page);
               $this->load->view('admin/template/header.php');
             $this->load->view('admin/template/navigation.php');
             $this->load->view('admin/pages/'.$page,$data);
             $this->load->view('admin/template/footer.php');
               
            }
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
             else if($page=='add_product')
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
         public function view_order($id)
         {
             $data['order']=$this->order->getOrderById($id);
              $this->load->view('admin/template/header.php');
             $this->load->view('admin/template/navigation.php');
             $this->load->view('admin/pages/show_order',$data);
             $this->load->view('admin/template/footer.php');
         }
        
}
