<?php 

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!'); 

class M_login extends CI_Model  
{  

public function __construct()  
{  
	parent::__construct();  
} 

 public function takeUser($username, $password)  
 {  
 	$this->db->select('us_name', 'us_password');  
 	$this->db->from('sa_user');  
 	$this->db->where('us_name', $username);  
 	$this->db->where('us_password', $password);  

 	$query = $this->db->get(); 
 	return $query->num_rows();  
 }  

 public function userData($username)  
 {  
 	$this->db->select('us_name');   
 	$this->db->where('us_name', $username);  
 	$query = $this->db->get('user');  
 	return $query->row();  
 }  
} 