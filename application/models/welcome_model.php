<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome_model
 *
 * @author EVAN
 */
class Welcome_Model extends CI_Model {

    //put your code here

    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_all_published_product() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_all_published_product_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('category_id', $category_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }
    
    public function select_product_detail_by_product_id($product_id){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();

//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

}

?>