<?php 

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');  

class Login extends CI_Controller  
{  

public function __construct()  
{  
	parent::__construct();  

	$this->load->model('M_login');
	$this->load->library(array('form_validation','session'));  
	$this->load->database();  
	$this->load->helper('url');  
}  

public function index()  
{  
	$session = $this->session->userdata('isLogin');  
	if($session == FALSE)  
		{  
			redirect('login/login_form');  
		}else  
		{  redirect('home');  
		}  
}  

public function login_form()  
{  
	$this->form_validation->set_rules('us_name', 'Username', 'required|trim|xss_clean');  
	$this->form_validation->set_rules('us_password', 'Password', 'required|md5|xss_clean');  
	$this->form_validation->set_error_delimiters('<span class="error">', '</span>');  
	if($this->form_validation->run()==FALSE)  

	{  
		$this->load->view('form_login');  
	}else  
	{  
		$username = $this->input->post('us_name');  
		$password = $this->input->post('us_password');  
		$cek = $this->m_login->takeUser($username, $password, 1);  
		if($cek <> 0)  
		{  
			$this->session->set_userdata('isLogin', TRUE);  
			$this->session->set_userdata('us_name',$username);
			redirect('home');  
		}else  
		{  
?>  

		<script>  
			alert('Failed Login: Check your username and password!');  
			history.go(-1);  
		</script>  
	<?php  
	}  
}  
}  
public function logout()  
{  
	$this->session->sess_destroy();  
	redirect('login/main');  
}  
}  
?>