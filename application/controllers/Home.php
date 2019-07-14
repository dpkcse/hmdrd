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
		$data = array();
		$data['title'] = "Dashboard";
		$this->load->view('dashboard',$data);
	}

	/* new customer function section */

	public function save_employee(){

		$data=array();
		$data['first_name']		= $this->input->post('first_name',true);
		$data['last_name']		= $this->input->post('last_name',true);
		$data['gender']			= $this->input->post('gender',true);
		$data['phone_number']	= $this->input->post('phone_number',true);
		$data['email']			= $this->input->post('email',true);
		$data['address_1']		= $this->input->post('address_1',true);
		$data['address_2']		= $this->input->post('address_2',true);
		$data['city']			= $this->input->post('city',true);
		$data['country']		= $this->input->post('country',true);
		$fdata['username']		= $this->input->post('username',true);
		$fdata['password']		= md5($this->input->post('password',true));

		$this->admin_model->save_employee($data,$fdata);
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
		$data = array();
		$data['title'] = "Customer";
		$this->load->view('v-new-customer',$data);
	}


	public function customerList(){
		$data = array();
		$data['title'] = "Customer List";
		$this->load->view('v-new-customer-list',$data);
	}

	/******  Sales person function section ******/

	public function newSalesPerson(){
		$data = array();
		$data['title'] = "Employee";
		$this->load->view('add-employee',$data);
	}

	public function salesList(){
		$data = array();
		$data['title'] = "Employee";
		$this->load->view('v-new-stuff-list',$data);
	}


	/****** Product Entry function section ******/
	
	public function newProductEntry(){
		$data = array();
		$data['title'] = "Product";
		$this->load->view('add-product',$data);
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
		$data = array();
		$data['title'] = "Product List";
		$this->load->view('v-new-product-list',$data);
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
		$this->load->view('invoice', $data);
	}

	public function getCustomerBy_code(){ 
		$postData = $this->input->post();
		$data = $this->admin_model->getCustomerBy_code($postData);
		echo json_encode($data, JSON_UNESCAPED_UNICODE); 
	}

	public function getProductDetailsByCode(){ 
		$postData = $this->input->post();
		$data = $this->admin_model->getProductDetailsByCode($postData);
		echo json_encode($data, JSON_UNESCAPED_UNICODE); 
	}
	/****** Invoice function section end ******/

}
