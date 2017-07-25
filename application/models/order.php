<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order
 *
 * @author sunil_12
 */
class Order extends My_model {
    public function __construct() {
        parent::__construct();
    }
    public function countOrder()
    {
        $data=array(
            'user_name'=>$_SESSION['user_name']
        );
         $this->db->where($data);
        $this->db->from('tbl_user');
        $result = $this->db->count_all_results();
        if($result=="")
        {
            return 0;
        }
         else {
             return $result;
         }
        
    }
    public function makeOrder($id,$receipt)
    {
        //die($receipt);
          foreach ($this->cart->contents() as $cont) {
           $data = array(
               'product_id'=>$cont['id'],
               'user_id'=>$id,
               'price' =>$cont['subtotal'],
               'order_quantity'=>$cont['qty'],
               'receipt'=>$receipt,
               'order_status'=>'ordered',
               );
            $result =$this->getProduct($data['product_id']);
            $sub = $result->quantity-$data['order_quantity'];
            $this->db->insert('tbl_order',$data);
            $prod = array(
                'category_id'=> $result->category_id,
                'sub_category_id' => $result->sub_category_id,
                'product_img' => $result->product_img,
                'product_title'=> $result->product_title,
                'product_disc'=>$result->product_disc,
                'product_size'=>$result->product_size,
                'product_price'=>$result->product_price,
                'quantity'=>$sub
                
            );
            $this->db->where('product_id',$result->product_id);
            $this->db->update('tbl_products',$prod);
            
                
                        
                
         }
         return true;
               
    }
    public function getProduct($id)
    {
        $result =$this->db->get_where('tbl_products',array('product_id'=>$id));
        return $result->row();
    }
    public function getOrder($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_user','tbl_user.user_id=tbl_order.user_id');
        $this->db->join('tbl_products','tbl_products.product_id=tbl_order.product_id');
        $this->db->where('tbl_order.user_id',$id);
        $this->db->order_by('tbl_order.receipt');
        $result=$this->db->get();
       // print'<pre>';
        return $result->result_array();
    }
    public function getOrderById($id)
    {
         $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_user','tbl_user.user_id=tbl_order.user_id');
        $this->db->join('tbl_products','tbl_products.product_id=tbl_order.product_id');
        $this->db->where('tbl_order.order_id',$id);
        
        $result=$this->db->get();
       // print'<pre>';
        return $result->row();
    }
    public function updateorder()
    {
        $user = $this->getOrderById($this->input->post('order_id'));
       // print_r($user);
       // die();
        $data=array(
          'product_id'=>$user->product_id,
           'user_id'=>$user->user_id,
            'price'=>$user->price,
            'order_quantity'=>$user->order_quantity,
            'receipt'=>$user->receipt,
            'order_date'=>$user->order_date,
            'order_status'=>$this->input->post('status')
        );
        $this->db->where('order_id',$this->input->post('order_id'));
        $this->db->update('tbl_order',$data);
        return true;
                
    }
    public function updateorderproduct()
    {
        $user = $this->getOrderById($this->input->post('order_id'));
        $product_qty = $user->quantity + $user->order_quantity;
        $data=array(
          'product_id'=>$user->product_id,
           'user_id'=>$user->user_id,
            'price'=>$user->price,
            'order_quantity'=>$user->order_quantity,
            'receipt'=>$user->receipt,
            'order_date'=>$user->order_date,
            'order_status'=>$this->input->post('status')
        );
        $this->db->where('order_id',$this->input->post('order_id'));
        $this->db->update('tbl_order',$data);
        $product = array(
            'sub_category_id' => $user->sub_category_id,
            'product_img'=>  $user->product_img,
            'product_title'=>  $user->product_title,
            'product_disc'=> $user->product_disc,
            'product_size'=> $user->product_size,
            'product_price'=> $user->product_price,
            'status'=>$user->status,
            'category_id'=> $user->category_id,
            'quantity'=> $product_qty,
            );
             $this->db->where('product_id',$user->product_id);
            $this->db->update('tbl_products',$product);
            return true;
    }       
   
    

}
