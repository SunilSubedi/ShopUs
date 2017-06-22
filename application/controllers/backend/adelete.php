<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adelete
 *
 * @author sunil_12
 */
class Adelete extends My_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('listmodel');
         //session_start();
      if(!isset($_SESSION['admin']))
      {
          redirect('login');
      }
    }
    public function listadmin($table,$id)
    {
      
       
     $this->listmodel->delete($table,$id);
     redirect('admin/'.$table);
    }
}
