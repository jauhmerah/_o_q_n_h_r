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
	    	$this->load->view($this->parent_page.'/header');
	    	$this->load->view($this->parent_page.'/menu');
	       	$this->load->view($this->parent_page.'/'.$page , $data);//$this->parent_page.'/'.$page
	    	$this->load->view($this->parent_page.'/footer');
	    }

	    function page($page = 'dashboard' , $process = '-1')
	    {

	        $data = null;
	        switch ($process) {
	    		case '1':
	    			//nk load semua data dlm db
	    		    $this->load->model('m_user');
	    			$data['arr'][0] = $this->m_user->get();
	    			$temp = array(
	    				"us_name" => 'farid',
	    				"us_email" => 'farid@huhu.com'		    				    				
	    			);
	    			$data['arr'][1] = $this->m_user->get($temp);
	    			/*$data['arr'][1] = array(
	    			    'farid' => $data['arr'][0][0]->us_name
	    			);
	    			$temp = array(
	    			    "us_id" => 2
	    			);
	    			$data['arr'][2] = $this->m_user->get($temp);*/
	    			/*$temp = array(
	    				'itemName' =>  "rid"
	    			);
	    			$data = $this->m_user->searchItem($temp);*/
	    			break;
	    		case '2':
	    			//login process
	    			$post =  $this->input->post();
	    			$temp = array(
	    			    "us_id" => 2
	    			);
	    			break;
    			case '3':
					//view apa yg dipost
					// member/page/testoutput/3
					$data['arr'] = $this->input->post();
    			break;
	    		case '4':
	    			$post =  $this->input->post();
	    			$temp = array(
	    				"us_name" => $post['username'],
	    				"us_password" => $post['password']
	    			);
	    			$this->load->model('m_user');
	    			if (!$this->m_user->get($temp)) {
	    				redirect(site_url('main/page/signin/5'));
	    			}
	    			break;
	    		case '5':
	    	        $arr =  $this->input->post();
	    	    	$temp = array(
	    	    		"us_name" => $arr['username'],
	    	    		"us_email" => $arr['email'],
	    	    		
	    	    		"pr_add" => $arr['address'],
	    	    		"pr_phone" => $arr['phone'],
	    	    		"pr_gender" => $arr['gender'],
	    	    		"pr_image"=>$arr['image']

	    	    	);
	    	    	$this->load->model('m_profile');
	    	    	$this->m_profile->insert($temp);
	    	    	break;
	    	    case '6':
	    	        $arr =  $this->input->post();
	    	    	$temp = array(
	    	    		"pl_name" => $arr['itemname'],
	    	    		"pl_price" => $arr['price'],
	    	    		"pl_category" => $arr['category'],
	    	    		"pl_subcategory" => $arr['subcategory']
	    	    		);
	    	    	$this->load->model('m_product');
	    	    	$this->M_product->insert($temp);
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
	   		$this->_display('upload_form', $error);

	   	}else{
	   		$file_data =$this->upload->data();
	   		$data['img'] = base_url().'/images/'.$file_data['file_name'];
	   		//$this->load->view('success',$data);
	   		$this->_display('successupload', $data);
	   	}
		}

	    

	    

	    /*public function upload(){
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
	   	}*/
	  

	}
	        
?>