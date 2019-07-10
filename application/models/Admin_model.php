<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function getAllCustomers()
    {
        $this->db->select('*');
		$this->db->from('customers');
		$query = $this->db->get()->result();
		return $query;
    }
    public function getAllProducts()
    {
        $this->db->select('pro_name');
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

	function getProductDetails($postData){
		$response = array();
		$this->db->select('*');
		$this->db->where('pro_name', $postData['pro_name']);
		$q = $this->db->get('products');
		$response = $q->result_array();

		return $response;
	}
}