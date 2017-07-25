<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of oders
 *
 * @author sunil_12
 */
class Oders extends My_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('order');
        $this->load->library('email');
    }
    public function index($id,$receipt)
    {
       // die($receipt);
         
        if($this->order->makeOrder($id,$receipt))
        {
            
       
            $this->cart->destroy();
            redirect('/success');
        }
    }
    public function changeorder()
    {
        if($this->input->post('status')=='cancel')
        {
            //die('hello');
            if($this->order->updateorderproduct())
            {
                  redirect('admin/list_order');
            }
                    
        }
        else
        {
           // die('hello');
            if($this->order->updateorder())
            {
                redirect('admin/list_order');
            }
        }
    }
}