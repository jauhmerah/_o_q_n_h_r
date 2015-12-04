<?php
 
class Cartsaja extends Controller { // Our Cart class extends the Controller class
     
    function Cart()
    {
        parent::__construct(); // We define the the Controller class is the parent. 
        $this->load->model('m_cart'); 
    }
 	
 	 function index() {
	        $this->_display();
	    }

 	function trying()
	{
	
    $data['products'] = $this->m_cart->get_semua(); // Retrieve an array with all products
   	echo "<pre>";
    print_r($data['products']); // Print out the array to see if it works (Remove this line when done testing)
	}
 
}