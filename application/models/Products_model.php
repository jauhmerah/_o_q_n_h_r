<?php

class Products_model extends CI_Model
{
	function get_all()
	 {
	 	$this->db->select("item_name,item_price,item_availability,item_condition,item_brand");
	 	$this->db->from('cat_fashion');
	 	/*$this->db->where('item_id=2');*/
	 	$results = $this->db->get()->result();
	 	return $results;
	       
	 }	 
}
?>