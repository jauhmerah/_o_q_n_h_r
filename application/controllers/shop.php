<?php

class Shop extends CI_Controller
{
	function index()
	 {

	        $this->load->model('Products_model');
	        $data['products'] = $this->Products_model->get_all();
	        /*echo "<pre>";
			print_r($data['products']);*/
	        $this->load->view('products',$data);
	  } 

	  

	
}
?>