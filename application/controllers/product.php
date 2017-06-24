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
        
        $config['base_url']=   base_url()."product/getProduct/$category/$sub_category/";
        $config['total_rows']=  $this->listproduct->total();
        $config['per_page']=2;
        $config['num_links']=10;
    $config["full_tag_open"] = '<ul class="pagination">';
$config["full_tag_close"] = '</ul>';	
$config["first_link"] = "&laquo;";
$config["first_tag_open"] = "<li>";
$config["first_tag_close"] = "</li>";
$config["last_link"] = "&raquo;";
$config["last_tag_open"] = "<li>";
$config["last_tag_close"] = "</li>";
$config['next_link'] = '&gt;';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '<li>';
$config['prev_link'] = '&lt;';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '<li>';
$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

        //$config['anchor_class'] = 'class="number"';
        $this->pagination->initialize($config);
            
        if($this->uri->segment(3)===false)
        {
            $offset=0;
        }
        else
        {
            $offset=$this->uri->segment(3);
        }
      //  die($sub_category);
        $result['product']=$this->listproduct->getProduct($sub_category,$config['per_page'],$offset);
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
