<?php 
 class User_login extends My_controller
 {
     public function __construct() {
         parent::__construct();
        $this->load->model('listmodel');
        $this->load->model('user');
     }

     public function index()
     {
         $data['phone']=9801446191;
        $data['category']=$this->listmodel->listpage('list_category');
        $data['sub_category']=  $this->listmodel->listpage('list_sub_category');
       // print_r($data['category']);
       // die('thank you');
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/pageparts/topbar.php',$data);
    $this->load->view('frontend/pageparts/header.php',$data);
        $this->load->view('frontend/pages/user_login.php');
          $this->load->view('frontend/pageparts/prefooter.php');
        $this->load->view('frontend/template/footer.php');
     }
     public function register()
     {
        if($this->user->addUser()==TRUE)
        {
            $this->session->set_flashdata('success','Sucessfully Created User')  ;
            $this->index();
            
        }
     }
     public function check()
     {
        $data['count']=$this->user->getUser('count');
        if($data['count']>0)
        {
          $data['record']=$this->user->getUser('user');
         // print_r($data['record']);
          $record = array(
            'full_name'=>$data['record']->full_name,
             'user_name'=>$data['record']->user_name,
              'user_id'=>$data['record']->user_id,
             
          );
          $this->session->set_userdata($record);
          //$this->session->set_flashdata('success','Welcome'.$record['full_name']);
          redirect('/home');
        }
        else
        {
            //die(md5('1fabe24325dfb298a63fb5a855d59cb3'));
            $this->session->set_flashdata('success','Incorrect Email and Password ');
            $this->index();
        }
     }
     public function logOut()
     {
         session_destroy();
         $this->cart->destroy();
         redirect('/home');  
     }
   
             
     
     
     
 }


?>
