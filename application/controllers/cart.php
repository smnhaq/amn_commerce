<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author MOSHIUL
 */
class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model', 'w_model', TRUE);
    }

    public function add_to_cart($product_id) {
        $product_info = $this->w_model->select_product_detail_by_product_id($product_id);
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        $data = array(
            'id' => $product_info->product_id,
            'qty' => 1,
            'price' => $product_info->product_price,
            'name' => $product_info->product_name,
            'image' => $product_info->product_image,
        );

        $this->cart->insert($data);
        redirect('cart/show_cart');
    }

    public function show_cart() {
        $data = array();
        $data['title'] = "Shopping Cart";
        $data['cartcontent'] = $this->load->view('cart_content', $data, TRUE);
        $this->load->view('view_cart', $data);
    }

    public function update_cart( ) {
        $rowid = $this->input->post('rowid', true);
        $qty = $this->input->post('qty', true);
        
//        echo $rowid."---------".$qty;
//        exit();
        
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }
    
    public function delete_item($rowid){
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }

    public function update_cart2( $rowid, $qty) {
//        $rowid = $this->input->post('rowid', true);
//        $qty = $this->input->post('qty', true);
        
        echo $rowid."---------".$qty;
        exit();
        
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }

}

?>
