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
               'price' =>$cont['price'],
               'quantity'=>$cont['qty'],
               'receipt'=>$receipt,
               );
            $result =$this->getProduct($data['product_id']);
            $sub = $result->quantity-$data['quantity'];
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

}
