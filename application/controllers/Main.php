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

	    function _display($page = 'main', $data = '' )
	    {
	    	
	    	//$this->load->view('header');
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