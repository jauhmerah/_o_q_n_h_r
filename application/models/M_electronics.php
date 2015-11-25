<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_electronics extends CI_Model {         
     
        function get_electronicsx1()
     {
        $this->db->select('*');
        $this->db->from('cat_electronics');
        $this->db->where('sub_id=3');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_electronicsx2()
     {
        $this->db->select('*');
        $this->db->from('cat_electronics');
        $this->db->where('sub_id=4');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


   
        function get_electronicsx3()
     {
        $this->db->select('*');
        $this->db->from('cat_electronics');
        $this->db->where('sub_id=5');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_electronicsx4()
     {
        $this->db->select('*');
        $this->db->from('cat_electronics');
        $this->db->where('sub_id=6');

        
        $results = $this->db->get()->result();
        return $results;
           
     }  


        
}

?>