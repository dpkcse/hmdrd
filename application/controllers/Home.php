<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'text'));
		// $akt_user_id = $this->session->userdata('id');
		// if ($akt_user_id == NULL ) {
		// 	redirect('login');
		// }
		$this->load->model('admin_model');
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

	/* new customer function section */

	public function newCustomer(){
		$this->load->view('v-new-customer');
	}


	public function customerList(){
		$this->load->view('v-new-customer-list');
	}

	/******  Sales person function section ******/

	public function newSalesPerson(){
		$this->load->view('v-new-stuff');
	}

	public function salesList(){
		$this->load->view('v-new-stuff-list');
	
	}


	/****** Product Entry function section ******/
	
	public function newProductEntry(){
		$this->load->view('v-new-item');
	}
	
	public function productList(){
		$this->load->view('v-new-product-list');
	}	
	
	


	/****** Login System function section ******/

	public function login(){
		$this->load->view('v-login');
	}


	/****** Invoice function section ******/

	public function newInvoice(){
		$data = array();
		$data['title'] = "Invoice";
		$data['allCustomers'] = $this->admin_model->getAllCustomers();
		$data['allproducts'] = $this->admin_model->getAllProducts();
		// json_encode($data['allproducts'], JSON_UNESCAPED_UNICODE); 
		$this->load->view('invoice', $data);
	}

	public function getCustomerBy_code(){ 
		$postData = $this->input->post();
		$data = $this->admin_model->getCustomerBy_code($postData);
		echo json_encode($data, JSON_UNESCAPED_UNICODE); 
	}
	public function getProductDetails(){ 
		$postData = $this->input->post();
		$data = $this->admin_model->getProductDetails($postData);
		echo json_encode($data, JSON_UNESCAPED_UNICODE); 
	}
	/****** Invoice function section end ******/

}
