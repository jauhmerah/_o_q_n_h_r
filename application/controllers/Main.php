<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Main extends CI_Controller {
	
		var $parent_page = "main";

	    function __construct() {
	        parent::__construct();
	        $this->load->model('m_user');
	        $this->load->helper('url');
<<<<<<< HEAD
	        $this->load->library('session');
=======
>>>>>>> origin/anis_pro_process

	    }
	
	    function index() {
	        $this->_display();

<<<<<<< HEAD
	        /*$session = $this->session->userdata('isLogin');  
	        if($session == FALSE)  
	        {  
	        	redirect('main/page/signin');  
	    	}else{ 
	    		redirect('main');  
	    	}*/

=======
>>>>>>> origin/anis_pro_process
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


<<<<<<< HEAD
=======

>>>>>>> origin/anis_pro_process
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

	    	    

	    	}
	    	$this->_display($page,$data);
	    }

	    public function pecahhati($first = null , $second = null)
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
<<<<<<< HEAD


			/*$data['arr'] = $this->m_item->get_search($temp,"cat_shoes");
			$this->load->view('main/testoutput', $data)*/
			
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

=======


			/*$data['arr'] = $this->m_item->get_search($temp,"cat_shoes");
			$this->load->view('main/testoutput', $data)*/
			
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

>>>>>>> origin/anis_pro_process
	    		case '4':
	    			//nk load semua data dlm db
	    		    $table = 'cat_automotive';
	    		    break;
	    		case '5':
	    			//nk load semua data dlm db
	    		    $table = 'cat_business';
	    		    break;
	    	}

	    	$data['arr'] = $this->m_item->get_search($search,$table);
			$this->load->view('main/testoutput', $data);
	    			
		}

		public function add()
		{
			$data = array(
				'item_id' =>'3',
				'item_name' => 'Torchlight',
				
				'item_price' => 16.9,
				
				);

			$this->cart->insert($data);
			echo "add() called";
		}

		public function show()
		{
			$cart = $this->cart->contents();

			echo "<pre>";
			print_r($cart);
			 echo "</pre>";

		}

		public function lala()
	 {

	        $this->load->model('Products_model');
	        $data['products'] = $this->Products_model->get_all();
	        echo "<pre>";
			print_r($data['products']);
	        /*$this->load->view('products',$data);*/
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

<<<<<<< HEAD
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main');
	}

=======
>>>>>>> origin/anis_pro_process
	}
	        
?>