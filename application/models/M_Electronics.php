<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_electronics extends CI_Model {         
     
        function get_fashionx1()
     {
        $this->db->select('*');
        $this->db->from('cat_fashion');
        $this->db->where('sub_id=9');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_fashionx2()
     {
        $this->db->select('*');
        $this->db->from('cat_fashion');
        $this->db->where('sub_id=10');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


   
        function get_fashionx3()
     {
        $this->db->select('*');
        $this->db->from('cat_fashion');
        $this->db->where('sub_id=11');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_fashionx4()
     {
        $this->db->select('*');
        $this->db->from('cat_fashion');
        $this->db->where('sub_id=12');

        
        $results = $this->db->get()->result();
        return $results;
           
     }  


        function get_fashionx5()
     {
        $this->db->select('*');
        $this->db->from('cat_fashion');
        $this->db->where('sub_id=13');

        
        $results = $this->db->get()->result();
        return $results;
           
     }    
}

?>