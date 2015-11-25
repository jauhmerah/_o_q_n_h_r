<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_business extends CI_Model {         
     
        function get_businessx1()
     {
        $this->db->select('*');
        $this->db->from('cat_business');
        $this->db->where('sub_id=20');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_businessx2()
     {
        $this->db->select('*');
        $this->db->from('cat_businesss');
        $this->db->where('sub_id=21');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


   
        function get_businessx3()
     {
        $this->db->select('*');
        $this->db->from('cat_business');
        $this->db->where('sub_id=22');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_businessx4()
     {
        $this->db->select('*');
        $this->db->from('cat_business');
        $this->db->where('sub_id=23');

        
        $results = $this->db->get()->result();
        return $results;
           
     }  


        
}

?>