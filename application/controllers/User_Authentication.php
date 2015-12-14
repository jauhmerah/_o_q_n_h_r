<?php

class User_Authentication Extends CI_Controller
{
	function __construct()
	 {

	        parent::__construct();
	        $this->load->helper('url');
	        $this->load->library('session');
	        $this->load->library('form_validation');

	        // Load database
   	         $this->load->model('login_database');

	    }

	    function index()
		{

		$this->load->view('main/page/signin', array('error' => ' ' ));

		}

		/*public function main_2() 
		{
			//echo 'lalalaaa';
			/*$data = $this->_checkSession();

			
			if($data != false)
		    { 
				$result = $this->login_database->retrive($data);
				
				if($result != false)
				{
					$data2 = array
					 	(
					   		'userlevel'     =>$result[0]->us_level,
					   		'username'     =>$result[0]->us_name
					  	);
					
					$this->load->view('main_2',$data2);					   
				}	   	 
			}
			else
			{
				$this->_redirectPage();   
			}
		}*/
		function _checkSession($menu = false)
	 	{
	 		if($this->session->userdata('logged_in'))     
	 		{ 
				$data = $this->session->userdata('logged_in');
				return $data;
	 		}
	 		else
	 		{
		 		if($menu)
		 		{
					return false; 
		 		}
		 		else
		 		{
		 			return $this->_redirectPage();
		 		}
	 		} 
 		}
 

		function _redirectPage()
 		{
	 		redirect("/main/page/signin");
	 		return false;
 		} 

	    public function user_login_process() 
			{
				$this->load->model('login_database');
				//return false;
			    $data = array
				    (
			       		'username' => $this->input->post('username'),
			      		'password' => $this->input->post('password')
			        );
			      	
			    $result = $this->login_database->login($data);
			      
				if($result == TRUE)
				{
			       	$sess_array = array
					 	(
			          		'username' => $this->input->post('username')
			         	);
			    
			      	// Add user data in session

			        $this->session->set_userdata('logged_in', $sess_array);
			        $result = $this->login_database->read_user_information($sess_array);

			        redirect('User_Authentication/session');
			       
		            }
		            
					else
						{
							$this->session->set_flashdata('errorlogin','Your <B> Username</B> or <B> Password </B>is wrong, Please try again');
					        redirect('main/page/signin');
					        
					    }
					}

			public function session()
			{
				$data = $this->_checkSession();
                 
                 
                 if($data != false)
                 { 
							$result = $this->login_database->retrive($data);

							
							
							if($result != false)
							{
								$data2 = array
								 	(
								   		'userlevel'     =>$result[0]->us_level,
								   		'username'     =>$result[0]->us_name
								  	);
								//redirect('main/page/main_2',$data);
								$this->load->view('main/main_2',$data2);					   
							}	   	 
							else
							{
								redirect('main/page/signin');   						 
							}

				}
				else
				{
					$this->_redirectPage();   
				}
				 
			}
					
			public function logout() 
			{
				// Removing session data
				$sess_array = array('username' => '');

				$this->session->unset_userdata('logged_in', $sess_array);
				$this->session->sess_destroy();
				$data['message_display'] = "<script>alert('Successfully Logout!')</script>";

			   	redirect('/main');
			}
			 		/*function _checkSession($menu = false)
				 	{
				 		if($this->session->userdata('logged_in'))     
				 		{ 
							$data = $this->session->userdata('logged_in');
							return $data;
				 		}
				 		else
				 		{
					 		if($menu)
					 		{
								return false; 
					 		}
					 		else
					 		{
					 			return $this->_redirectPage();
					 		}
				 		} 
			 		}
			 

					function _redirectPage()
			 		{
				 		redirect("/main/page/signin/1");
				 		return false;
			 		}*/
			 	}