<?php

Class Login_Database extends CI_Model {

function getMembers()
{
  $this->db->select("us_id,us_password,us_name,us_active_status,us_email,us_email_verification_code");
  $this->db->from('sa_user');
  $query = $this->db->get();
  return $query->result();
}

function getTables()
{
  $this->db->select("us_id,us_password,us_name,us_active_status,us_email,us_email_verification_code");
  $this->db->from('sa_user');
  $this->db->where('us_active_status','not');
  $query = $this->db->get();
  return $query->result();
}


// check ic number
function checkUsername($data)
{
  $condition = "us_name =" . "'" . $data['username'] . "'";

  $this->db->select('*');
  $this->db->from('sa_user');
  $this->db->where($condition);
  $this->db->limit(1);
  
  $query = $this->db->get();
    
    if ($query->num_rows() == 1)
    {
      return $query->result();
    } 
    else 
    {
      return false;
    }
}


/*public function update_status()
{
  $email = $this->input->get('email');

  $this->db->where('user_email',$email);

  $data = array('status' => 'Verified',);

  return $this->db->update('user_login', $data);
}*/


// Insert registration data in database
public function registration_insert($data) 
{
	// Query to check whether username already exist or not
	$condition = "us_name=" . "'" . $data['username']. "'";
	
  $this->db->select('*');
	$this->db->from('sa_user');
	$this->db->where($condition);
	$this->db->limit(1);
	
  $query = $this->db->get();
	
  if ($query->num_rows() == 0) 
	{
	// Query to insert data in database
		$this->db->insert('sa_user', $data);
		
    if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
	} 
	else 
	{
	  return false;
	}
}


// Read data using username and password
public function login($data) 
{
  $condition = "us_name =" . "'" . $data['username'] . "' AND " . "us_password =" . "'" . $data['password'] . "'";
  
  $this->db->select('*');
  $this->db->from('sa_user');
  $this->db->where($condition);
  $this->db->limit(1);
  
  $query = $this->db->get();

  if ($query->num_rows() == 1)
  {
    return true;
  } 
  else 
  {
    return false;
  } 
}


public function retrive($data) 
{
  $condition = "us_name =" . "'" . $data['username'] . "'";
  
  $this->db->select('*');
  $this->db->from('sa_user');
  $this->db->where($condition);
  $this->db->limit(1);
  
  $query = $this->db->get();

  if ($query->num_rows() == 1)
  {
    return $query->result();
  } 
  else 
  {
    return false;
  }  
}


// Read data from database to show data in admin page
public function read_user_information($sess_array) 
{
  $condition = "us_name =" . "'" . $sess_array['username'] . "'";
  
  $this->db->select('*');
  $this->db->from('sa_user');
  $this->db->where($condition);
  $this->db->limit(1);
  
  $query = $this->db->get();

  if ($query->num_rows() == 1)
  {
   return $query->result();
  }
  else 
  {
    return false;
  }
}

public function retrive_user_information($sess_array) 
{
  $condition = "us_name =" . "'" . $sess_array['username'] . "'";
  
  $this->db->select('*');
  $this->db->from('sa_user');
  $this->db->where($condition);
  $this->db->limit(1);
  
  $query = $this->db->get();

  if ($query->num_rows() == 1)
  {
   return $query->result();
  }
  else 
  {
    return false;
  }
}


}
?>