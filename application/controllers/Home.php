<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'text'));
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Dashboard";
		$this->load->view('dashboard',$data);
	}

	/*
		This method use for save invoice data into sales table and sales item table;
	*/ 

	public function save_sales(){
		/* Load form helper */ 
		$this->load->helper(array('form'));
                                    
		/* Load form validation library */ 
		$this->load->library('form_validation');

		/* Set validation rule for name field in the form */ 
		$this->form_validation->set_rules('invoiceid', 'Name', 'required');
		$this->form_validation->set_rules('salesDate', 'Date', 'required');
		$this->form_validation->set_rules('customerCode', 'Customer Code', 'required');
		$this->form_validation->set_rules('customerName', 'Customer Name', 'required');
		$this->form_validation->set_rules('stuffid', 'Stuff Name', 'required');
		$this->form_validation->set_rules('totaltk', 'Total Amount', 'required');
		$this->form_validation->set_rules('paid', 'Paid Amount', 'required');

		if ($this->form_validation->run() == FALSE) { 
			// $this->session->set_flashdata('success', 'Required feild(s) data missing');
			redirect(base_url() . 'newInvoice', 'refresh');
		}else {
			$inputInsertData= array(
				'sale_time' => $this->input->post('salesDate'),
				'customer_id' => $this->input->post('customerCode'),
				'employee_id' => $this->input->post('stuffid'),
				'invoice_number ' => $this->input->post('invoiceid'),
				'sales_paid ' => $this->input->post('paid'),
			);
			$insertedid = $this->admin_model->insertData('hmdrd_sales',$inputInsertData);

			if($this->input->post('productcode') != ''){

				$products = $this->input->post('productcode');
				$qty = $this->input->post('qty');
				$salePrice = $this->input->post('salePrice');

				$salesitem = array();
				foreach ($products as $key => $value) {
					$salesitem[] = array(
						'sale_id'=>$insertedid,//this is current insert id
						'item_id'=>$value,//this is product id
						'serialnumber'=>$key,
						'quantity_purchased'=>$qty[$key],
						'item_cost_price'=>'0.000',
						'item_unit_price'=>$salePrice[$key]
					 );
				}
			}

			$this->admin_model->insertbatchinto('hmdrd_sales_items',$salesitem);
			redirect(base_url() . 'public/invoice-list', 'refresh');
		}	
	}
	

	public function invoiceVoiceList(){
		$this->data['title'] = 'Sales';
        $this->data['invoices'] = $this->db->get('hmdrd_sales')->result_array();
        $this->load->view('invoiceVoiceList', $this->data);
	}

	public function invoiceprint($sale_id){
		
		$this->data['invoicedata'] =  $this->db->get_where('hmdrd_sales' , array('sale_id' => $sale_id) )->result_array();
		$this->data['invoiceitemdata'] = $this->db->get_where('hmdrd_sales_items' , array('sale_id' => $sale_id) )->result_array();

		// var_dump($this->data['invoiceitemdata']);
		

        // // //this the the PDF filename that user will get to download
		// $pdfFilePath = $this->data['invoicedata'][0]['invoice_number'].".pdf";

		// //load mPDF library
		// $this->load->library('m_pdf'); 
		//now pass the data//
		$html = $this->load->view('v_invoice_design', $this->data);
	// 	$pdfFilePath ="invoice-".time().".pdf"; 
	// 	//actually, you can pass mPDF parameter on this load() function
	// 	$pdf = $this->m_pdf->load();
	// 	$pdf->allow_charset_conversion = true;
	// 	$pdf->charset_in = 'UTF-8';

	// 	//generate the PDF!
	// 	$stylesheet = '<style>'.file_get_contents('Assets/css/custom.css').'</style>';
	// 	// apply external css
	// 	$pdf->WriteHTML($stylesheet,1);
	// 	$pdf->WriteHTML(utf8_encode($html),2);
	// 	//offer it to user via browser download! (The PDF won't be saved on your server HDD)
	// 	$pdf->Output($pdfFilePath, "D");
	// 	exit;

    //    //generate the PDF from the given html
	// 	$this->m_pdf->pdf->WriteHTML($html);

    //     //download it.
	// 	$this->m_pdf->pdf->Output($pdfFilePath, "D");
	// 	// $this->m_pdf->pdf->Output('', "I");
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
