<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function save_stuff($data)
	{
		$this->db->insert('stuff',$data);
	}

	public function save_custmers($data)
	{
		$this->db->insert('customers',$data);
	}

    public function getAllCustomers()
    {
        $this->db->select('*');
		$this->db->from('customers');
		$query = $this->db->get()->result();
		return $query;
    }
    public function getAllProducts()
    {
        $this->db->select('code_no,pro_name');
		$this->db->from('products');
		$query = $this->db->get()->result();
		return $query;
    }
		
	function getCustomerBy_code($postData){
		$response = array();
		$this->db->select('*');
		$this->db->where('cus_code', $postData['cus_code']);
		$q = $this->db->get('customers');
		$response = $q->result_array();

		return $response;
	}

	// function getProductDetails($postData){
	// 	$response = array();
	// 	$this->db->select('*');
	// 	$this->db->where('pro_name', $postData['pro_name']);
	// 	$q = $this->db->get('products');
	// 	$response = $q->result_array();

	// 	return $response;
	// }
	function getProductDetailsByCode($postData){
		$response = array();
		$this->db->select('*');
		$this->db->where('code_no', $postData['code_no']);
		$q = $this->db->get('products');
		$response = $q->result_array();

		return $response;
	}
}