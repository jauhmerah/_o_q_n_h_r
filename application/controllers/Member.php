<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Member extends CI_Controller {
	
		var $parent_page = "dashboard";

	    function __construct() {
	        parent::__construct();
	        $this->load->helper('url');
	    }
	
	    function index() {
	        $this->_display();
	    }

	    function _display($page = 'dashboard', $data = '')
	    {	     	
			$this->load->view($this->parent_page.'/'.'header' );
			$this->load->view($this->parent_page.'/'.'menu' );	    		    	
	    	$this->load->view($this->parent_page.'/'.$page , $data);//$this->parent_page.'/'.$page
	    	//$this->load->view('footer');
	    }

	    function page($page = 'dashboard' , $process = '-1')
	    {
	        $data = null;	        
	    	switch ($process) {
	    		case '1':	    		    
	    			break;	    	    
	    	}
	    	$this->_display($page,$data);
	    }
	}
	        
?>