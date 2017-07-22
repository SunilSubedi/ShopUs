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
        $this->load->library('pagination');
       
    }
    public function getProduct($category,$sub_category)
    {
        
        

        //$config['anchor_class'] = 'class="number"';
     
      //  die($sub_category);
        $result['product']=$this->listproduct->getProduct($sub_category,$category);
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
    public function getsingle($id)
    {
        
        $result['product']=$this->listproduct->getsingle($id);
         $data['phone'] = 9801446192;
        $data['category'] = $this->listmodel->listpage('list_category');
        $data['sub_category'] = $this->listmodel->listpage('list_sub_category');
      //  if (isset($_SESSION['user_name'])) {
            // $data['count']=  $this->order->countOrder();
            // $data['total'] = $this->order->total();
        //}
        // print_r($data['category']);
        // die('thank you');
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/pageparts/topbar.php', $data);
        $this->load->view('frontend/pageparts/header.php', $data);
        $this->load->view('frontend/pages/product-view.php',$result);
        $this->load->view('frontend/pageparts/prefooter.php');
        $this->load->view('frontend/template/footer.php');
         
    }
    
    public function payment()
    {
        $order['user_id'] = $_SESSION['user_id'];
        foreach ( $this->cart->contents() as $items)
        {
            $order['product_id']=$items['id'];
            $order['quantity']=$items['qty'];
            $order['price']=$items['price'];
            $order['status']='active';
            $result = $this->order->makeOrder($order);
        }
       if($result==true)
       {
           $this->cart->destroy();
          // $this->flash->set_flashdata('success','Thank you for the transcation');
           redirect('/success');
           
       }
        
    }
}
