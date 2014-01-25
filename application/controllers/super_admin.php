<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Super_Admin extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
        $admin_id = $this->session->userdata('admin_id');
        //echo '-----'.$admin_id;
        if ($admin_id == null) {
            redirect('admin_login', 'refresh');
        }
    }

    /*
     * @function name index, logout;
     * @author : Asim Chandra Das
     * @created date: 13-01-2014
     * @parameters : 
     * This function responcetest to the admin side
     */

    public function index() {
        $data = array();
        $data['title'] = "Dashboard";
        $data['admin_maincontent'] = $this->load->view('admin/admin_maincontent', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function logout() {
        session_destroy();
        $this->session->unset_userdata('admin_id');
        $data = array();
        $data['message'] = 'You Are Successfully Logout !';
        $this->session->set_userdata($data);
        redirect('admin_login');
    }

    /*
     * @function name index, logout;
     * @author : Asim Chandra Das
     * @created date: 13-01-2014
     * @parameters : 
     * This function responcetest to the admin side
     */

    public function add_category_form() {
        $data = array();
        $data['title'] = "Category";
        $data['admin_maincontent'] = $this->load->view('admin/save_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $data = array();
        /* ----------------Upload Image Start----------------- */
        $config['upload_path'] = 'images/product_images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
        $config['max_size'] = '1000000';
        $config['max_width'] = '3600';
        $config['max_height'] = '3600';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            $data['error_message'] = "File type or size invalid !";
            $this->session->set_userdata($data);
        } else {
            $fdata = $this->upload->data();
            $data['category_image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        /* ----------------Upload Image End------------------ */


        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        $this->sa_model->save_category_info($data);
        $msg_data['success_msg'] = "Category Saved Successfully.";
        $this->session->set_userdata($msg_data);

//        echo '<pre>';
//        print_r($data);
//        exit();
        redirect('super_admin/view_category');
    }

    public function view_category() {
        $data = array();
        $data['title'] = "Category Manager";
        
        
        
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_category/';
        $config['total_rows'] = $this->db->count_all('tbl_category');
        $config['per_page'] = 4;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $this->pagination->initialize($config);
        $data['all_category'] = $this->sa_model->select_all_category_by_pagination($config['per_page'], $this->uri->segment(3));
        $data['admin_maincontent'] = $this->load->view('admin/view_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_category($category_id) {
        $data = array();
        $data['title'] = "Category";
        
        
        
        
        
        $data['category_by_id'] = $this->sa_model->select_category_info_by_category_id($category_id);

//        echo '<pre>';
//        print_r($data['category_by_id']);
//        exit();

        $data['admin_maincontent'] = $this->load->view('admin/edit_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $config['upload_path'] = 'images/product_images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
        $config['max_size'] = '1000000';
        $config['max_width'] = '3600';
        $config['max_height'] = '3600';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            $category_id = $this->input->post('category_id', TRUE);
            $data['category_name'] = $this->input->post('category_name', TRUE);
            $data['category_description'] = $this->input->post('category_description', TRUE);
            $data['publication_status'] = $this->input->post('publication_status', TRUE);
            $data['category_image'] = $this->input->post('category_image', TRUE);
            $this->sa_model->update_category_info_by_category_id($data, $category_id);
            $msg['success_msg'] = "Update Category Information successfully.";
            $this->session->set_userdata($msg);
            redirect('super_admin/view_category');
        } else {
            $fdata = $this->upload->data();
            $data['category_image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $category_id = $this->input->post('category_id', TRUE);
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

//start image unlink..............

        $category_info = $this->sa_model->select_category_info_by_category_id($category_id);
        $image_path = explode(base_url(), $category_info->category_image, 2);
        unlink($image_path[1]);

//end image unlink.....................
        $this->sa_model->update_category_info_by_category_id($data, $category_id);
        $msg['success_msg'] = "Update Category Information successfully.";
        $this->session->set_userdata($msg);
        redirect('super_admin/view_category');
    }

    public function delete_category($category_id) {

        $category_info = $this->sa_model->select_category_info_by_category_id($category_id);
        $image_path = explode(base_url(), $category_info->category_image, 2);
        unlink($image_path[1]);
        $this->sa_model->delete_category_info_by_category_id($category_id);
        $msg_data = array();
        $msg_data['success_msg'] = "Category deleted Successfully";
        $this->session->set_userdata($msg_data);
        redirect('super_admin/view_category');
    }

    public function unpublished_category($category_id) {
        $this->sa_model->unpublish_category_by_category_id($category_id);
        redirect('super_admin/view_category');
    }

    public function published_category($category_id) {
        $this->sa_model->publish_category_by_category_id($category_id);
        redirect('super_admin/view_category');
    }
    
    /*
     * @function name index, logout;
     * @author : Nazmul Haque
     * @created date: 20-01-2014
     * @parameters : 
     * This function responcetest to the admin side
     */
    
    public function view_product()
    {
        $data = array();
        $data['title'] = "Product Management";
        
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/view_product/';
        $config['total_rows'] = $this->db->count_all('tbl_product');
        $config['per_page'] = 4;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $this->pagination->initialize($config);        
        
        $data['all_product'] = $this->sa_model->select_all_product_by_pagination($config['per_page'], $this->uri->segment(3));
        
        $data['admin_maincontent'] = $this->load->view('admin/view_product', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
    
    /*
     * @function name index, logout;
     * @author : Nazmul Haque, Moshiul Alam Gazi
     * @created date: 20-01-2014
     * @parameters : 
     * This function responcetest to the admin side
     */
    public function add_product_form() {
        $data = array();
        $data['title'] = "Product Management";
        $data['all_category'] = $this->sa_model->select_all_category();
        $data['admin_maincontent'] = $this->load->view('admin/save_product', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {
        $data = array();
        /* ----------------Upload Image Start----------------- */
        $config['upload_path'] = 'images/product_images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
        $config['max_size'] = '1000000';
        $config['max_width'] = '3600';
        $config['max_height'] = '3600';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            $data['error_message'] = "File type or size invalid !";
            $this->session->set_userdata($data);
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        /* ----------------Upload Image End------------------ */


        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['product_description'] = $this->input->post('product_description', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $data['product_price'] = $this->input->post('product_price', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        $this->sa_model->save_product_info($data);
        $msg_data['success_msg'] = "Product Saved Successfully.";
        $this->session->set_userdata($msg_data);

//        echo '<pre>';
//        print_r($data);
//        exit();
        redirect('super_admin/view_product');
    }

    
    
    
    
    /*
     * @function name index, logout;
     * @author : Nazmul Haque
     * @created date: 24-01-2014
     * @parameters : 
     * This function responcetest to the admin side
     */
    public function unpublish_product($product_id) {
        $this->sa_model->unpublish_product_by_product_id($product_id);
        redirect('super_admin/view_product');
    }

    public function publish_product($product_id) {
        $this->sa_model->publish_product_by_product_id($product_id);
        redirect('super_admin/view_product');
    }
    
    public function delete_product($product_id) {

        $product_info = $this->sa_model->select_product_info_by_product_id($product_id);
        $image_path = explode(base_url(), $product_info->product_image, 2);
        unlink($image_path[1]);
        $this->sa_model->delete_product_info_by_product_id($product_id);
        $msg_data = array();
        $msg_data['success_msg'] = "PRODUCT deleted Successfully";
        $this->session->set_userdata($msg_data);
        redirect('super_admin/view_product');
    }

    public function edit_product($product_id) {
        $data = array();
        $data['title'] = "Edit Product";
        $data['all_category'] = $this->sa_model->select_all_category();
        $data['product_info'] = $this->sa_model->select_product_info_by_product_id($product_id);

//        echo '<pre>';
//        print_r($data['category_by_id']);
//        exit();

        $data['admin_maincontent'] = $this->load->view('admin/edit_product', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

//    public function update_product() {
//        $data = array();
//        $config['upload_path'] = 'images/product_images/';
//        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
//        $config['max_size'] = '1000000';
//        $config['max_width'] = '3600';
//        $config['max_height'] = '3600';
//        $error = array();
//        $fdata = array();
//        $this->load->library('upload', $config);
//        if (!$this->upload->do_upload('image')) {
//            $error = $this->upload->display_errors();
//            $product_id = $this->input->post('product_id', TRUE);
//            $data['product_name'] = $this->input->post('product_name', TRUE);
//            $data['category_id'] = $this->input->post('category_id', TRUE);
//            $data['product_description'] = $this->input->post('product_description', TRUE);
//            $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
//            $data['product_price'] = $this->input->post('product_price', TRUE);
//            $data['publication_status'] = $this->input->post('publication_status', TRUE);
//            $data['product_image'] = $this->input->post('product_image', TRUE);
//            
////        echo '<pre>';
////        print_r($data);
////        exit();
//            
//            $this->sa_model->update_product_info_by_product_id($data, $product_id);
//            $msg['success_msg'] = "Product Information UPDATED successfully.";
//            $this->session->set_userdata($msg);
//            redirect('super_admin/view_product');
//        } else {
//            $fdata = $this->upload->data();
//            $data['product_image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
//        }
//        $product_id = $this->input->post('product_id', TRUE);
//        $data['product_name'] = $this->input->post('product_name', TRUE);
//        $data['category_id'] = $this->input->post('category_id', TRUE);
//        $data['product_description'] = $this->input->post('product_description', TRUE);
//        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
//        $data['product_price'] = $this->input->post('product_price', TRUE);
//        $data['publication_status'] = $this->input->post('publication_status', TRUE);
//        
//        
//
//        
////start image unlink..............
//
//        $product_info = $this->sa_model->select_product_info_by_product_id($product_id);
//        $image_path = explode(base_url(), $product_info->product_image, 2);
//        unlink($image_path[1]);
//
////end image unlink.....................
//        
//        
//        $this->sa_model->update_product_info_by_product_id($data, $product_id);
//        $msg['success_msg'] = "Product Information UPDATED successfully.";
//        $this->session->set_userdata($msg);
//        redirect('super_admin/view_product');
//    }
    
      public function update_product() {
        $data = array();
        $config['upload_path'] = 'images/product_images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
        $config['max_size'] = '1000000';
        $config['max_width'] = '3600';
        $config['max_height'] = '3600';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            $product_id = $this->input->post('product_id', TRUE);
            $data['product_name'] = $this->input->post('product_name', TRUE);
            $data['category_id'] = $this->input->post('category_id', TRUE);
            $data['product_description'] = $this->input->post('product_description', TRUE);
            $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
            $data['product_price'] = $this->input->post('product_price', TRUE);
            $data['product_image'] = $this->input->post('product_image', TRUE);
            $data['publication_status'] = $this->input->post('publication_status', TRUE);
            $product_id = $this->input->post('product_id', TRUE);

//            echo '<pre>';
//            print_r($data);
//            exit();
            
            $this->sa_model->update_product_info_by_product_id($data, $product_id);
            $msg['success_msg'] = "Update product Information successfully.";
            $this->session->set_userdata($msg);
            redirect('super_admin/view_product');
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }
        $product_id = $this->input->post('product_id', TRUE);
        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['product_description'] = $this->input->post('product_description', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $data['product_price'] = $this->input->post('product_price', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

//        echo '<pre>';
//        print_r($data);
//        exit();
           
//start image unlink..............

        $product_info = $this->sa_model->select_product_info_by_product_id($product_id);
        $image_path = explode(base_url(), $product_info->product_image, 2);
        unlink($image_path[1]);

//end image unlink.....................
        $this->sa_model->update_product_info_by_product_id($data, $product_id);
        $msg['success_msg'] = "Update product Information successfully.";
        $this->session->set_userdata($msg);
        redirect('super_admin/view_product');
    }
    
}

?>
