<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Main extends CI_Controller {
	
		var $parent_page = "main";

	    function __construct() {
	        parent::__construct();
	        //Load Library and model.
	        $this->load->model('m_user');
	        $this->load->helper('url');
	        $this->load->library('session');
	       $this->load->model('m_cart');
			$this->load->model('m_item');
			 // Load the cart library to use it.
   			 $this->load->library('cart');
   			 

	    }
	
	    function index() {
	        $this->_display();
	         

	        /*$session = $this->session->userdata('isLogin');  
	        if($session == FALSE)  
	        {  
	        	redirect('main/page/signin');  
	    	}else{ 
	    		redirect('main');  
	    	}*/



	       /*$verificationCode = random_string('alnum', 20);  
                  
                $email_msg = "Dear User,  
                <p
                Please click on below URL or paste into your browser to verify your Email Address.<p></p>";  
                $email_msg .= "http://yourdomain/user/verify/" . $verificationCode;  
                $email_msg .= "<p>Thanks,  
                Support Team</p>";  
                $subject = "Email Verification";  
                $this->load->library('email');  
                $config['charset'] = 'iso-8859-1';  
                $config['wordwrap'] = TRUE;  
                $config['mailtype'] = 'html';  
                $this->email->initialize($config);  
                $this->email->from('admin@souqanshar.com', 'Support Team');  
                $this->email->to($email);  
                $this->email->subject($subject);  
                $this->email->message($email_msg);  
                $this->email->send();  
                  
                // Insert user record  */   
	    } 

	    function _display($page = 'main', $data = '' )
	    {
	    	
	    	//$this->load->view('header');
	    	$this->load->view($this->parent_page.'/'.$page , $data);//$this->parent_page.'/'.$page
	    	//$this->load->view('footer');
	    }

	    function page($page = 'main' , $process = '-1')
	    {
	        $data = null;

	    	switch ($process)
	    	{
	    		case '18':
	    			$this->load->model('m_item');
	    			$data['arr'] = $this->m_item->get();  
	    			break;

	    		case 'x1':
	    			$arr = $this->input->get();	    			
	    			$this->load->model('m_item');
	    			$arr1 = array(
	    				"item_id" => $arr['item']
	    			);
	    			$temp = $this->m_item->get($arr1,$arr['cat']);
	    			$data['products'] = $temp;
	    			/*print_r($temp);*/
	    			break;

	    	    case '4':
	    	    //sign up process
	    	    	$arr =  $this->input->post();
	    	    	$temp = array(
	    	    		"us_name" => $arr['username'],
	    	    		"us_email" => $arr['email'],
	    	    		"us_password" => $arr['password']
	    	    		
	    	    	);
	    	    	$this->load->model('m_user');
	    	    	$this->m_user->insert($temp);

	    	    	break;
	    	    case '5':
	    	    	$data['error'] = true;
	    	    	break;

		    	case '6':
		    		$post = $this->input->post();
		    		$temp = array(
		    			"us_name" => $post['username'],
		    			"us_password" => $post['password']
		    		);
		    		$this->load->model('m_user');
		    		$cek = $this->m_user->get($temp);
		    		if (!$cek) {
		    			$this->session->flashdata($us_name);
		    			redirect(site_url('main/page/signin/5'));
		    		}
		    		else{//$this->session->set_flashdata($us_name);	    				    			
	    			$this->session->set_userdata($temp);    
	    			redirect('main/page/main_2'); 
	    			}
	    			echo "<script>  
	    			alert('Failed Login: Check your username and password!');  
	    			history.go(-1);  
	    			</script>";  
		    		break;

	    	    case '4':
	    	    //cart process
	    	    	$arr =  $this->input->post();
	    	    	$temp = array(
	    	    		"us_name" => $arr['username'],
	    	    		"us_email" => $arr['email'],
	    	    		"us_password" => $arr['password']
	    	    		
	    	    	);
	    	    	$this->load->model('m_user');
	    	    	$this->m_user->insert($temp);
	    	    	break;

	    	    case 'x2':
	    			$arr = $this->input->get();	    			
	    			$this->load->model('m_user');
	    			$arr1 = array(
	    				"sa_name" => $arr['name']
	    			);
	    			$temp = $this->m_user->get($arr1);
	    			//$data['anot'] = $temp;
	    			print_r($temp);
	    			break;
	    	}
	    	$this->_display($page,$data);
	    }

	    //cari nisbah perkataan yang sama
	    public function pecahankata($first = null , $second = null)
	    {
	    	if ($this->input->post()) {
	    		$word = $this->input->post();
	    		$first = $word['text1'];
	    		$second = $word['text2'];
	    	}
	    	$arr1 = $this->pecahkata($first);
	    	$arr2 = $this->pecahkata($second);
	    	print_r($arr1);
	    	echo "<br>";
	    	print_r($arr2);
	    	echo "<br>";
	    	$kick1 = $this->kicksama($arr1);
	    	$kick2 = $this->kicksama($arr2);
	    	//print_r($kick2);
	    	$sama = $this->carisama($kick1 , $kick2);
	    	echo $sama;
	    	echo "<br>";
	    	/*$formula = $this->formula($arr1, $arr2);
	    	echo $formula;
	    	echo "<br>";*/
	    	$percentage = $this->percentage($sama,$arr1, $arr2);
	    	echo ($percentage);
	    }

	    public function pecahkata($word = null)
	    {
	    	$arr = str_split($word);
	    	$size = sizeof($arr);
	    	$text = "";
	    	for ($i=0; $i < ($size - 1); $i++) { 
	    		$text = $text . $arr[$i] . $arr[$i+1];
	    		if ($i < ($size - 2)) {
	    			$text = $text . "|";
	    		}
	    	}
	    	$arr = explode("|", $text);
	    	return $arr;
	    } 

	    public function carisama($arr1 = null , $arr2 = null)
	    {
	    	$num = 0;
	    	$size1 = sizeof($arr1);
	    	$size2 = sizeof($arr2);
            for($i=0; $i < $size1; $i++)
            {
            	for($j= 0; $j < $size2; $j++) 
            	{
            		if($arr1[$i] == $arr2[$j])
            		{
            			$num++;
            		}
            	}
            }
            return $num;
	    } 

	   public function kicksama($arr = null)
	    {
	    	$num = 0;
	    	$size = sizeof($arr);
	    	
	    	for ($i=($size-1); $i >= 0; $i--)
	    	{
	    		$m = 1;
	    		if ($i > 0) 
	    		{
	    			for ($j=($i-1); $j >= 0 ; $j--) 
	    			{
	    				echo $arr[$i];
	    				echo "<=>"; 
	    				echo $arr[$j];
	    				echo "<br>";
		    			if ($arr[$i] == $arr[$j])
		    			{
		    				echo "True<br>";
		    				$m = 0 ;
		    			}
		    		}	
	    		}
	    		if ($m == 1) {
	    			$temp[$num] = $arr[$i];
	    			$num++;
	    		}
	    	}
	    	return $temp;
	    }

	    public function percentage($sama, $arr1 = null, $arr2 = null)
	    {
	    	$temp2=0;
	    	$size1= sizeof($arr1);
	    	$size2= sizeof($arr2);
	    	if($size1 != 0 && $size2 != 0)
	    	$temp2=$sama/(sqrt($size1) * sqrt($size2));
	    	return $temp2;
	    }
	    //tutup nisbah perkataan yang sama

	    //search function
	  	public function searching()
	    {
	    	$this->load->database();
	   		$this->load->model('cat_shoes');

         //load the method of model  
         $data['h']=$this->cat_shoes->select();  
         //return the data in view  
         $this->load->view('search', $data);      		
		}

		public function search()
		{
			$this->load->model('m_item');
			$process = $this->input->post('sub_cat');
			$search = $this->input->post("itemname");

				
					    
			/*$data['arr'] = $this->m_item->get_search($temp,"cat_shoes");
			$this->load->view('main/testoutput', $data)*/
			/**
				kat sini kena dynamic
			*/
			
			$data = null;
	        switch ($process) 
	        {
	    		case '1':
	    			//nk load semua data dlm db	    		    
	    		    $table = 'cat_fashion';
	    		    break;
	    		case '2':
	    			//nk load semua data dlm db
	    		    $table = 'cat_electronics';
	    		    break;
	    		case '3':
	    			//nk load semua data dlm db
	    		    $table = 'cat_travel';
	    		    break;
	    		case '4':
	    			//nk load semua data dlm db
	    		    $table = 'cat_automotive';
	    		    break;
	    		case '5':
	    			//nk load semua data dlm db
	    		    $table = 'cat_business';
	    		    break;	

	    	}
	    		$data ['products']=$this->m_item->get_search($search,$table);
		    	$data['table'] = $table;		    		
				$this->load->view('main/souqshop', $data); 	  			
		}
		//tutup search function

		

		//keluarkan semua item
		 function lala()
	 	{
	        $this->load->model('Products_model');
	       
	        
	        /*$data['products2'] = $this->Products_model->get_all3();*/
	        /*$data['table1'] = $table1;*/
	        /*$data['table2'] = $table2;*/
	        $data['products'] = $this->Products_model->get_all2();
	       	/*echo "<pre>";
			print_r($data['products']);*/
			/*print_r($data['products2']);*/
			
	    			
	    	
	    	
	       

	        if ($this->input->get('item_id') != '')
			{
			$this->cart->insert($data['products'][$this->input->get('item_id')]);
			
			}

			
		

		 $this->load->view('main/miza',$data);
	 	}//tutup keluarkan semua item

	 	//keluarkan semua item page souqshop2
		 function productlist()
	 	{
	        $this->load->model('m_item');	       
	        $data['products1'] = $this->m_item->get_allz1();
	        $data['products2'] = $this->m_item->get_allz2();
	        $data['products3'] = $this->m_item->get_allz3();
	        $data['products4'] = $this->m_item->get_allz4();
	        /*$data['products5'] = $this->m_item->get_allz5();*/
	        $this->load->view('main/souqshop2',$data);
	 	}//tutup keluarkan semua item page souqshop2

	 	//function untuk cart & checkout page
	 	function add()
        {
        	/*echo $_POST["id"];
        	echo $_POST["name"];
        	echo $_POST["price"];*/

	        // Set array for send data.
			$insert_data = array(
			'id' => $_POST["id"],
			'name' => $_POST["name"],
			'price' => $_POST["price"],
			'qty' => 1
		);
			//rint_r($insert_data);

		// This function add items into cart.
		  // 
			$this->cart->insert($insert_data);
		   $cart = $this->cart->contents();
		    echo '<pre>';
		    print_r($cart);
		    echo '</pre>';

		// This will show insert data in cart.
		   /*redirect('main/page/miza');*/
		}

		function remove($rowid) 
		{
			// Check rowid value.
			if ($rowid==="all")
		{
			// Destroy data which store in session.
			$this->cart->destroy();
		}else
		{
			// Destroy selected rowid in session.
			$data = array(
			'rowid' => $rowid,
			'qty' => 0
		);
			// Update cart data, after cancel.
			$this->cart->update($data);
		}

			// This will show cancel data in cart.
			redirect('main/page/mizatry');
		}

		function update_cart()
		{

			// Recieve post values,calcute them and update
			$cart_info = $_POST['cart'] ;
			foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['item_price'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];

			$data = array(
			'rowid' => $rowid,
			'item_price' => $price,
			'amount' => $amount,
			'qty' => $qty
			);

		    $this->cart->update($data);
		}
		    redirect('main/page/mizatry');
		}

		function checkout()
		{
			// Load "checkout".
			$this->load->view('checkout');
		}

		public function save_order()
		{
			// This will store all values which inserted from user.
			$customer = array(
			'by_firstname' => $this->input->post('first_name'),
			'by_lastname' => $this->input->post('last_name'),
			'by_address1' => $this->input->post('by_address1'),
			'by_address2' => $this->input->post('by_address2'),
			'by_city' => $this->input->post('by_city'),
			'by_postalcode' => $this->input->post('by_postalcode'),
			'by_country' => $this->input->post('by_country'),
			'by_state' => $this->input->post('by_state'),
			'by_phone' => $this->input->post('by_phone'),
			'by_email' => $this->input->post('by_email'),
			);
			// And store user information in database.
			$cust_id = $this->m_item->insert_customer($customer);

			$order = array(
			'date' => date('Y-m-d'),
			'buyer_id' => $cust_id
			);

			$ord_id = $this->m_item->insert_order($order);

			if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
			$order_detail = array(
			'cr_orderID' => $ord_id,
			'cr_itemID' => $item['cr_itemID'],
			'cr_price' => $item['cr_price'],
			'cr_quantity' => $item['qty']
			);

			// Insert product imformation with order detail, store in cart also store in database.

			$cust_id = $this->m_item->insert_order_detail($order_detail);
			endforeach;
			endif;

			// After storing all imformation in database load "billing_success".
			$this->load->view('billing_success');
		}

	    /*public function upload(){
	   	$config['upload_path'] = "./images/";
	   	$config['allowed_types'] = 'jpg|jpeg|gif|png';
	   	$this->load->library('upload',$config);

	   	if(!$this->upload->do_upload()){
	   		
	   		$error = array ('error'=>$this->upload->display_errors());
	   		//$this->load->view('upload_form',$error);
	   		$this->_display('upload_form', $error);

	   	}else{
	   		$file_data =$this->upload->data();
	   		$data['img'] = base_url().'/images/'.$file_data['file_name'];
	   		//$this->load->view('success',$data);
	   		$this->_display('successupload', $data);
	   	}
	   }*/

		/*public function logout()
		{
			$this->session->sess_destroy();
			redirect('main');
		}*/

		function lala2()
	 	{
	        $this->load->model('Products_model');
	        $data['products'] = $this->Products_model->get_all2();
	       	echo "<pre>";
			print_r($data['products']);
	    }

	    function trying()
	{
	
    $data['products'] = $this->m_cart->get_semua(); // Retrieve an array with all products
   	/*echo "<pre>";
    print_r($data['products']); // Print out the array to see if it works (Remove this line when done testing)*/
     $data['content'] = 'testcart1/products';// Select our view file that will display our products
    $this->load->view('testcart', $data); // Display the page with the above defined content

	}

	function add_cart_item(){
     
    if($this->m_cart->validate_add_cart_item() == TRUE){
         
        // Check if user has javascript enabled
        if($this->input->post('ajax') != '1'){
            redirect('cart'); // If javascript is not enabled, reload the page with new data
        }else{
            echo 'true'; // If javascript is enabled, return true, so the cart gets updated
        }
    }
     
}
	    

	}
	        
?>