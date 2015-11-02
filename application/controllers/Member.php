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
	    		$this->load->model('m_user');
	    			    		    
	    			break;	    	    
	    	}
	    	$this->_display($page,$data);
	    }

	    public function upload(){
	   	$config['upload_path'] = "./images/";
	   	$config['allowed_types'] = 'jpg|jpeg|gif|png';
	   	$this->load->library('upload',$config);

	   	if(!$this->upload->do_upload()){
	   		
	   		$error = array ('error'=>$this->upload->display_errors());
	   		//$this->load->view('upload_form',$error);
	   		$this->_display('profileupdate_db', $error);

	   	}else{
	   		$file_data =$this->upload->data();
	   		$data['img'] = base_url().'/images/'.$file_data['file_name'];
	   		//$this->load->view('success',$data);
	   		$this->_display('berjaya', $data);
	   	}
	   }

	   
	}
	        
?>