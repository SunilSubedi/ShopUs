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
}