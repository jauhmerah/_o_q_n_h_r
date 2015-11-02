<?php

/**sends email paboo*/
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller
{
	function __construct()
	{
		parent::Controller();
		$this->load->helper('url');
	}

	function index()
	{
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);


		);

		$this->load->library('email');
		$this->email->set_newline("\r\n");

		$this->email->from('addinhanis@gmail.com','Hanisyeapoo');
		$this->email->to('addinhanis@gmail.com');
		$this->email->subject("this is an email cntik");
		$this->email->message('it is working!');

		if($this->email->send())
		{
			echo 'Your email was sent,cantik';
		}

		else
		{
			show_error($this->email->print_debugger());
		}
	}
}
?>