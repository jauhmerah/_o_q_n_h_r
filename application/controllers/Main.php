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
	    	$this->load->view($this->parent_page.'/'.$page , $data);//$this->parent_page.'/'.$page
	    	//$this->load->view('footer');
	    }

	    function page($page = 'main' , $process = '-1')
	    {
	        $data = null;
	        $menu = -1;
	    	switch ($process) {
	    		case '1':
	    		    $this->load->model('m_user');
	    			$data['arr'][0] = $this->m_user->get();
	    			$data['arr'][1] = array(
	    			    'farid' => $data['arr'][0][0]->userName
	    			);
	    			$temp = array(
	    			    "userID" => 2
	    			);
	    			$data['arr'][2] = $this->m_user->get($temp);
	    			break;
	    		case '2':
	    		    $this->load->model('m_user');
	    		    $temp = array(
	    		        "userName" => "mizahuhu",
	    		        "userEmail" => "miza@huhu.com"
	    		    );
	    		    $this->m_user->insert($temp);
	    		    $data['arr'][0] = $this->m_user->get();
	    	    
	    	}
	    	$this->_display($page,$data,$menu);
	    }
	    
	     function registeration($page = "signup.php")
	    {
	        $this->load->view($this->parent_page.'/'.$page);
	   
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
	   
	}
	        
?>