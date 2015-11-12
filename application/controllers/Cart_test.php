<?php
class Cart_test extends CI_Controller
{
	function add()
	{
		$data=array
		(
			'cr_itemID'=> '1',
			'pl_name' => 'torchlight',
			'pl_price'=>19.99,
			'cr_quantity'=>1

		);

		$this->cart->insert($data);
		echo "add()called";

	}

	function show()
	{
		$cart=$this->cart->contents();
		echo "<pre>";
		print_r($cart);

	}
}