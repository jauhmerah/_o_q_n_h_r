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

	    function search($page = 'main' , $process = '-1')
	    {
	    	switch ($process) {
	    		case '1':
	    			# code...
	    			break;    		
	    	}
	    	$this->_display($page,$data);
	    }
	}
	        
?>