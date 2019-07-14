<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function save_employee($data)
	{
		$this->db->insert('hmdrd_employees',$data);
	}

	public function save_custmers($data)
	{
		$this->db->insert('customers',$data);
	}

	public function save_products($data)
	{
		$this->db->insert('products',$data);
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
    public function getAllEmployees()
    {
        $this->db->select('*');
		$this->db->from('hmdrd_people');
		$query = $this->db->get()->result();
		return $query;
    }
		
	function getCustomerBy_code($postData){
		$response = array();
		$this->db->select('*');
		$this->db->where('id', $postData['cus_code']);
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

	function get_type_name_by_id($type,$type_id='',$field='')
    {
        return  $this->db->get_where($type,array('id'=>$type_id))->row()->$field;    
	}

	function get_people_name_by_id($type,$type_id='',$field='')
    {
        return  $this->db->get_where($type,array('person_id'=>$type_id))->row()->$field;    
	}
	
	function insertData($table = FALSE, $data = FALSE){
        $this->db->insert($table, $data);
        if($this->db->affected_rows() > 0){
           $insertID = $this->db->insert_id();
            return $insertID; 
        }else
            return false;
	}
	
	function insertbatchinto($table, $data){
		$this->db->insert_batch($table, $data);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else{
			return false;
		}
	}
}