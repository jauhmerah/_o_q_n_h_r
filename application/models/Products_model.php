<?php

class Products_model extends CI_Model
{
	function get_all()
	 {
	 	$this->db->select("item_name,item_price,item_availability,item_condition,item_brand");
	 	$this->db->from('cat_fashion');
	 	$this->db->where('sub_id=9');
	 	$results = $this->db->get()->result();
	 	return $results;
	       
	 }	 

	 function get_all2()
	 {
	 	$this->db->select("item_name,item_price,item_availability,item_condition,item_brand");
	 	$this->db->from('cat_fashion');
	 	
	 	$results = $this->db->get()->result();
	 	return $results;
	       
	 }	

	  function get_all3()
	 {
	 	$this->db->select("item_name,item_price,item_availability,item_condition,item_brand");
	 	$this->db->from('cat_electronics');
	 	
	 	$results = $this->db->get()->result();
	 	return $results;
	       
	 }	  
}
?>