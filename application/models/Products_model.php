<?php

class Products_model extends CI_Model
{
	function get_all()
	 {
	 	$this->db->select('*');
	 	$this->db->from('sub_category');
	 	
	 	$results = $this->db->get()->result();
	 	return $results;
	       
	 }	 

	 function get_all2()
	 {
	 	$this->db->select("*");
	 	$this->db->from('cat_fashion');
	 	$this->db->where('sub_id=9');
	 	
	 	$results = $this->db->get()->result();
	 	return $results;
	       
	 }	

	  function get_all3()
	 {
	 	$this->db->select("*");
	 	$this->db->from('cat_electronics');
	 	
	 	$results = $this->db->get()->result();
	 	return $results;
	       
	 }	  
}
?>