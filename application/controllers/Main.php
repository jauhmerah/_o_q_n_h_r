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
	    }

	    function _display($page = 'main', $data = '')
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
	    	    		"userName" => $arr['username'],
	    	    		"userEmail" => $arr['email']
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
	    }
	}
	        
?>