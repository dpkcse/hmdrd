<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function save_employee($data,$fdata)
	{
		$this->db->insert('hmdrd_people',$data);
		 $fdata['person_id'] = $this->db->insert_id();
		$this->db->insert('hmdrd_employees',$fdata); 
	}

	public function updateEmployee($data,$fdata)
	{
		$this->db->where('person_id', $data['person_id']);
		$this->db->update('hmdrd_people', $data);

		 $fdata['person_id'] = $data['person_id'];
		$this->db->update('hmdrd_employees',$fdata); 
	}

	public function deleteEmployee($id)
	{
		$this->db->where('person_id', $id);
		$this->db->delete('hmdrd_people');
		if ($this->db->affected_rows() > 0) {
			$this->db->where('person_id', $id);
			$this->db->delete('hmdrd_employees');
		} else {
			return false;
		}
	}

	public function editEmployee($id)
	{
		$this->db->select('*');
		$this->db->from('hmdrd_people');
		$this->db->where('person_id', $id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}
	public function editEmployeeUser($id)
	{
		$this->db->select('*');
		$this->db->from('hmdrd_employees');
		$this->db->where('person_id', $id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function save_custmers($data)
	{
		$this->db->insert('customers',$data);
	}
	public function updateCustomer($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('customers', $data);
	}

	public function deleteCustomer($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('customers');
	}

	public function editCustomer($id)
	{
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('id', $id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function save_products($data)
	{
		$this->db->insert('products',$data);
	}

	public function updateProduct($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('products', $data);
	}

	public function deleteProduct($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('products');
	}

	public function editProduct($id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id', $id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
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

	function getProductDetailsByCode($postData){
		$response = array();
		$this->db->select('*');
		$this->db->where('code_no', $postData['code_no']);
		$q = $this->db->get('products');
		$response = $q->result();

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