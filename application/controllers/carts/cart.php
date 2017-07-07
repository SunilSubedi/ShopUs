<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author sunil_12
 */
class Cart  extends My_controller{
    public function __construct() {
        parent::__construct();
      //  $this->load->libaray('cart');
    }
    public function index()
    {
     // die('hello too');
        $data=array(
            'name'=>$_POST['name'],
            'id'=>$_POST['id'],
            'price'=>$_POST['price'],
            'qty'=>$_POST['quantity']
        );
        $this->cart->insert($data);
       echo  $this->view();
    }
    public function load()
    {
        echo $this->view();
    }
    public function remove()
    {
        
        $id=$_POST['id'];
       // $this->load->library('cart'); 
        $data = array(
        'rowid'=> $id,
         'qty'=> 0
            );
       // echo $id;
       
      
        $this->cart->update($data);
        $this->load();    
       // echo $this->view();
        //echo '<h1>Hello world</h1>';
    } 
    public function view()
    {
        $count=0;
        $output='';
        $output.='<table class="table table-striped small">'
                . ' <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Delte</th>
                      <th>Total</th>
                  </tr>';
        foreach ($this->cart->contents() as $cont) {
            $count++;
            $output.=' <tr>
                      <td>'.$cont['id'].'</td>
                      <td><img src='.base_url().'/application/upload/'.$cont['name'].'></td>
                      <td>'.$cont['qty'].'</td>
                      <td>'. $cont['price'].'</td>
                      <td><button type="button" class="btn btn-danger dele" data-id='.$cont['rowid'].'>Delete</button></td>
                       <td>'.$cont['subtotal'].'</td>   
                  </tr>';
        }
        $output.='<tr><td colspan=2> All Total:-'.$this->cart->total().'</td><tr>';
        
        if($count==0)
        {
            $output='Empty Cart';
        }
        return $output;
                
    }
 
}
