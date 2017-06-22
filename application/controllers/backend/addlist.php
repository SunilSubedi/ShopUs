<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addlist
 *
 * @author sunil_12
 */
class Addlist extends My_controller {
  public function __construct() {
      parent::__construct();
      
      $this->load->model('addmodel');
        //session_start();
      if(!isset($_SESSION['admin']))
      {
          redirect('login');
      }
  }
  public function postadmin()
  {
     //$this->form_validation->set_rules('user_name','User Name','is_unique[tbl_admin.user_nam]');
    // $this->form_validation->set_rules('email','Email','is_unique[tbl_admin.email]');
     $this->form_validation->set_rules('phone','Phone Number','numeric');
     if($this->form_validation->run()== false)
     {
         die(validation_errors());
         redirect('admin/addpage/add_admin');
     }
     else
     {
        if($this->addmodel->addAdmin()==TRUE)
        {
             $this->session->set_flashdata('success','Sucessfully Added');
            redirect('admin/list_admin');
        }
     }
  }
  public function postcategory()
  {
      if($this->addmodel->addCategory()==TRUE)
      {
          $this->session->set_flashdata('success','Sucessfully Added');
          redirect('admin/list_category');
      }
  }
  public function postsubcategory()
  {
      if($this->addmodel->addSubcategory()==TRUE)
      {
           $this->session->set_flashdata('success','Sucessfully Added');
          redirect('admin/list_sub_category');
      }
  }
  public function postproduct()
  {
      
       $config['upload_path']= $_SERVER['DOCUMENT_ROOT'].'/shopus/application/upload/';
        $config['allowed_types']='gif|jpeg|png|jpg';
        $config['max_size']='2048';
          $this->load->library('upload',$config);
          if($this->upload->do_upload('file_name'))
          {
              if($this->addmodel->addProduct()==TRUE)
              {
                   $this->session->set_flashdata('success','Sucessfully Added');
                  redirect('admin/list_product');
              }
              
          }
  }
}
