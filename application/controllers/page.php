<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author sunil_12
 */
class Page extends My_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('listmodel');
        $this->load->model('order');
        $this->load->model('listproduct');
    }
    public function index($page='home')
    { 
      if($page==='payment')
      {
          //echo($this->session->email);die();
          $data['user'] = $this->get_user($this->session->email);
      }
        //$this->uri->segment(1,'home');
        /* $data['phone']=9801446191;
          $data['category']=$this->listmodel->listpage('list_category');
          $data['sub_category']=  $this->listmodel->listpage('list_sub_category');
          // print_r($data['category']); */
        $data['phone'] = 9801446192;
        $data['category'] = $this->listmodel->listpage('list_category');
        $data['sub_category'] = $this->listmodel->listpage('list_sub_category');
        if($page==='home')
        {
            $product['product_new']=$this->listproduct->get_newProduct();
            $product['product_three']=  $this->listproduct->get_threeProduct(3);
            $product['product_two']=  $this->listproduct->get_threeProduct(2);
            $product['content_slider'] = $this->listproduct->getImage();
        }
        else if($page==='view_order')
        {
              $id=$this->session->user_id;
         $product['order']=$this->order->getOrder($id);
        }
        else {
            $product['product_new']=null;
        }
        if (isset($_SESSION['user_name'])) {
            // $data['count']=  $this->order->countOrder();
            // $data['total'] = $this->order->total();
        }
        // print_r($data['category']);
        // die('thank you');
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/pageparts/topbar.php', $data);
        $this->load->view('frontend/pageparts/header.php', $data);
        $this->load->view('frontend/pages/' .$page, $product);
        $this->load->view('frontend/pageparts/prefooter.php');
        $this->load->view('frontend/template/footer.php');
    }
     public function get_user($email)
    {
        // die($email);
         $data=array(
            'email'=>$email
        );
       $result=$this->db->get_where('tbl_user',$data);
       return $result->row();
    }

}
