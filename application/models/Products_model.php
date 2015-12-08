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
}
?>