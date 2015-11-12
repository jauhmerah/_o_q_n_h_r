<?php

class Products_model extends CI_Model
{
	function get_all()
	 {
	 	$results = $this->db->get('cat_travel')->result();
	 	return $results;
	       
	 } 

	  

	 
}
?>