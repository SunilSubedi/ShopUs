<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_model
 *
 * @author sunil_12
 */
class My_model  extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
}
