<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_travel extends CI_Model {         
     
        function get_travelx1()
     {
        $this->db->select('*');
        $this->db->from('cat_travel');
        $this->db->where('sub_id=7');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_travelx2()
     {
        $this->db->select('*');
        $this->db->from('cat_travel');
        $this->db->where('sub_id=8');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


   
        function get_travelx3()
     {
        $this->db->select('*');
        $this->db->from('cat_travel');
        $this->db->where('sub_id=14');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


     

        
}

?>