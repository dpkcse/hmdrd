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

	public function save_employee(){

		$data=array();
		$data['person_name']	= $this->input->post('person_name',true);
		$data['username']		= $this->input->post('username',true);
		$data['password']		= $this->input->post('password',true);
		$data['language']		= $this->input->post('language',true);
		$data['language_code']	= $this->input->post('language_code',true);
		$data['person_phone']	= $this->input->post('person_phone',true);
		$data['person_addr']	= $this->input->post('person_addr',true);

		$this->admin_model->save_employee($data);
		redirect('public/n-s-person');
	}

	public function save_custmers(){

		$data=array();
		$data['cus_code']			= $this->input->post('cus_code',true);
		$data['cus_name']	        = $this->input->post('cus_name',true);
		$data['cont_person_name']	= $this->input->post('cont_person_name',true);
		$data['cont_person_phone']	= $this->input->post('cont_person_phone',true);
		$data['cus_mobile']			= $this->input->post('cus_mobile',true);
		$data['cus_address']		= $this->input->post('cus_address',true);

		$this->admin_model->save_custmers($data);
		redirect('public/n-customer');
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
		$this->load->view('add-employee');
	}

	public function salesList(){
		$this->load->view('v-new-stuff-list');
	
	}


	/****** Product Entry function section ******/
	
	public function newProductEntry(){
		$this->load->view('add-product');
	}

	public function save_products(){
		
		$data=array();
		$data['code_no']		= $this->input->post('code_no',true);
		$data['pro_name']	    = $this->input->post('pro_name',true);
		$data['pro_details']	= $this->input->post('pro_details',true);
		$data['pro_type']	    = $this->input->post('pro_type',true);
		$data['amount']			= $this->input->post('amount',true);
		$data['buy_price']		= $this->input->post('buy_price',true);
		$data['sale_price']		= $this->input->post('sale_price',true);
		$data['pro_mrp']		= $this->input->post('pro_mrp',true);

		$this->admin_model->save_products($data);

		redirect('public/n-product');
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
		$data['allEmployees'] = $this->admin_model->getAllEmployees();
		// json_encode($data['allproducts'], JSON_UNESCAPED_UNICODE); 
		$this->load->view('invoice', $data);
	}

	public function getCustomerBy_code(){ 
		$postData = $this->input->post();
		$data = $this->admin_model->getCustomerBy_code($postData);
		echo json_encode($data, JSON_UNESCAPED_UNICODE); 
	}
	// public function getProductDetails(){ 
	// 	$postData = $this->input->post();
	// 	$data = $this->admin_model->getProductDetails($postData);
	// 	echo json_encode($data, JSON_UNESCAPED_UNICODE); 
	// }
	public function getProductDetailsByCode(){ 
		$postData = $this->input->post();
		$data = $this->admin_model->getProductDetailsByCode($postData);
		echo json_encode($data, JSON_UNESCAPED_UNICODE); 
	}
	/****** Invoice function section end ******/

}
