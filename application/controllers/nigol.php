<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nigol extends MY_Controller 
{
        
        var $parent_page = "nigol";

      	function __construct()
      	{
          parent::__construct(); 

          // Load database
          $this->load->model('login_database');
      	}
        
        private function viewpage($page='v_login', $data=array())
        {
            echo $this->load->view($this->parent_page.'/'.'v_header', $data, true);
           // echo $this->load->view($this->parent_page.'/'.'v_menu', $data, true);
            echo $this->load->view($this->parent_page.'/'.$page, $data, true);
           // echo $this->load->view('v_footer', $data, true);
        }


       public function index()
       {
            $this->viewpage('v_login');
       }
       
       
		    function checklogin()
        {
            echo $username = $this->input->post('username');
            echo $password = $this->input->post('password');
            
            echo $bol_login = $this->m_login->takeUser($username, $password);
            
           /* if ($bol_login) {
                $userdata = $this->session->all_userdata();
                $ut_id = $userdata['ut_id'];
                if ($ut_id == 1) {
                    redirect(site_url('admin'));
                } else if ($ut_id == 2) {
                    redirect(site_url('driver'));
                } else if ($ut_id == 3) {
                    redirect(site_url('passenger'));
                } else {
                    redirect(site_url('login'));
                }
            } else {
                redirect(site_url('login'));
            } */
        }
		
      /*    public function user_login_process() 
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
		
         */
        
        function _example_output($page, $output = null)
      	{
                  $this->viewpage($page, $output);
      	} 
}
