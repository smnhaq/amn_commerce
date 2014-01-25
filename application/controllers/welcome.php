<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model', 'w_model', true);
//        $this->load->model('super_admin_model', 'sa_model', true);
    }

    public function index() {
        $data = array();
        $data['title'] = "Home";
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['all_product'] = $this->w_model->select_all_published_product();
        $data['leftsidebar'] = $this->load->view('left_sidebar', $data, TRUE);
        $data['homecontent'] = $this->load->view('home_content', $data, TRUE);
        $data['rightsidebar'] = $this->load->view('right_sidebar', $data, TRUE);
        $this->load->view('home_master', $data);
    }

    public function select_all_product_by_category_id($category_id) {
        $data = array();
        $data['title'] = "Home";
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['all_product'] = $this->w_model->select_all_published_product_by_category_id($category_id);
        $data['leftsidebar'] = $this->load->view('left_sidebar', $data, TRUE);
        $data['homecontent'] = $this->load->view('home_content', $data, TRUE);
        $data['rightsidebar'] = $this->load->view('right_sidebar', $data, TRUE);

//        echo '<pre>';
//        print_r($data['all_category']);
//        exit();

        $this->load->view('home_master', $data);
    }
    
    public function product_detail_by_product_id($product_id){
        $data = array();
        $data['title'] = "Home";
        $data['all_category'] = $this->w_model->select_all_published_category();
        //$data['all_product'] = $this->w_model->select_all_published_product_by_category_id($category_id);
        $data['product_detail'] = $this->w_model->select_product_detail_by_product_id($product_id);
        $data['leftsidebar'] = $this->load->view('left_sidebar', $data, TRUE);
        $data['homecontent'] = $this->load->view('product_detail', $data, TRUE);
        $data['rightsidebar'] = $this->load->view('right_sidebar', $data, TRUE);

//        echo '<pre>';
//        print_r($data['all_category']);
//        exit();

        $this->load->view('home_master', $data);
        
    }

}
