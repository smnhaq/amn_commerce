<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
    }
    
     public function customer_area() {
        $data = array();
        $data['title'] = "Customer Area";
//        $data['all_category'] = $this->sa_model->select_all_published_category();
        $data['cartcontent'] = $this->load->view('checkout_area', $data, true);
        $this->load->view('view_cart', $data);
    }

}

?>
