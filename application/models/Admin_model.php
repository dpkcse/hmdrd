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

    public function getCustomerBy_code($data){

		$this->db->where('cus_code', $data);
		$query = $this->db->get('customers');
		$output =  $query->result();
		return $output;
    }
}