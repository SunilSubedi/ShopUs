<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of admin_login
 *
 * @author sunil_12
 */
class Admin_login  extends My_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('login');
     
    }
    public function index()
    {
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/pages/login.php');
        $this->load->view('admin/template/footer.php');
    }
    public function process()
    { 
        $data['count']=$this->login->check();
        if($data['count']>0)
        {
            $record= array(
                'admin'=>$this->input->post('user_nam')
            );
            $this->session->set_userdata($record);
            $this->session->set_flashdata('success','Login Sucessfully');
            redirect('admin/');
            
        }
       else {
            $this->session-> set_flashdata('success','Incorrect User name/ Password');
            $this->index();
       }
    }
        public function logout()
        {
            session_start();
            session_destroy();
            redirect('login');
        }
    
    
    
}

