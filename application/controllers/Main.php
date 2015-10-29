<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Main extends CI_Controller {
	
		var $parent_page = "main";

	    function __construct() {
	        parent::__construct();
	        $this->load->helper('url');
	    }
	
	   function index() {
	        $this->_display();
	        $verificationCode = random_string('alnum', 20);  
                  
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
                  
                // Insert user record     
	    } 

<<<<<<< HEAD
	    function _display($page = 'main', $data = '')
=======
	    function _display($page = 'main', $data = '' )
>>>>>>> origin/anot
	    {	    	    	
	    	$this->load->view($this->parent_page.'/'.$page , $data);//$this->parent_page.'/'.$page
	    	//$this->load->view('footer');
	    }

	    function page($page = 'main' , $process = '-1')
	    {
	        $data = null;
	        switch ($process) {
	    		case '1':
	    		    $this->load->model('m_user');
	    			$data['arr'] = $this->m_user->get();
	    			/*$data['arr'][1] = array(
	    			    'farid' => $data['arr'][0][0]->userName
	    			);
	    			$temp = array(
	    			    "userID" => 2
	    			);
	    			$data['arr'][2] = $this->m_user->get($temp);*/
	    			break;
	    		case '2':
	    		    $this->load->model('m_user');
	    		    $temp = array(
	    		        "userName" => "mizahuhu",
	    		        "userEmail" => "miza@huhu.com"
	    		    );
	    		    $this->m_user->insert($temp);
	    		    $data['arr'][0] = $this->m_user->get();
	    		case '3':
	    			//view apa yg dipost
	    			// main/page/testoutput/3
	    			$data['arr'] = $this->input->post();
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
	    	}
	    	$this->_display($page,$data);
	    }
	    
	     function registeration($page = "signup.php")
	    {
	        $this->load->view($this->parent_page.'/'.$page);
<<<<<<< HEAD

	    }

	    
            

=======
	   
	   }

	    public function upload(){
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
	   		$this->_display('success', $data);
	   	}
	   }
>>>>>>> origin/anot
	   
	}
	        
?>