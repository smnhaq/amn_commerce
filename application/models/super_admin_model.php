<?php

class Super_Admin_Model extends CI_Model {

    public function save_category_info($data) {
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->db->insert('tbl_category', $data);
    }

    /*
     * Pagination code starts here. 
     */

    public function select_all_category_by_pagination($per_page, $offset) {

        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get('', $per_page, $offset);
        $result = $query_result->result();

//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    /*
     * Pagination code ends here. 
     */

    public function select_all_category() {

        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();

//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_category_info_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info_by_category_id($data, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function update_category_info_by_category_id_category_image($data, $category_id, $category_image) {
        $this->db->where('category_id', $category_id);
        $this->db->where('category_image', $category_image);
        $this->db->update('tbl_category', $data);
    }

    public function delete_category_info_by_category_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

    public function unpublish_category_by_category_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function publish_category_by_category_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function save_product_info($data) {
        $this->db->insert('tbl_product', $data);
    }

// problem in this function below is it cant give us category name..
//    public function select_all_product_by_pagination($per_page, $offset) { 
//        $this->db->select('*');
//        $this->db->from('tbl_product');
//        $query_result = $this->db->get('', $per_page, $offset);
//        $result = $query_result->result();
//
////        echo '<pre>';
////        print_r($result);
////        exit();
//
//        return $result;
//    }

    public function select_all_product_by_pagination($per_page, $offset) {
        $this->db->select('tbl_category.category_name, tbl_product.product_id, tbl_product.product_name, tbl_product.product_description, tbl_product.product_image, tbl_product.product_price, tbl_product.product_quantity, tbl_product.publication_status');
        $this->db->from('db_amn_commerce.tbl_category tbl_category INNER JOIN db_amn_commerce.tbl_product tbl_product ON (tbl_category.category_id = tbl_product.category_id)');
        $query_result = $this->db->get();
        $result = $query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
    
    /*
     * @function name index, logout;
     * @author : Nazmul Haque
     * @created date: 24-01-2014
     * @parameters : 
     * This function responcetest to the admin side
     */
    public function select_product_info_by_product_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function unpublish_product_by_product_id($product_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function publish_product_by_product_id($product_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }
    
    public function delete_product_info_by_product_id($product_id) {
        $this->db->where('product_id', $product_id);
        $this->db->delete('tbl_product');
    }
    
    public function update_product_info_by_product_id($data, $product_id) {
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $data);
    }

}

?>