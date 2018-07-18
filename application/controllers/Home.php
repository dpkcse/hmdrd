<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('v-newInvoice');

		$this->load->view('v-invoice');
	}

	public function InvoiceDesign(){
		$this->load->view('v-invoice-design');
		//f8e22f6cbc5023ba323552565312fbac6ac85497
	}


}
