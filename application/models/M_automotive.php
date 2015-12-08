<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_automotive extends CI_Model {         
     
        function get_automotivex1()
     {
        $this->db->select('*');
        $this->db->from('cat_automotive');
        $this->db->where('sub_id=1');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_automotivex2()
     {
        $this->db->select('*');
        $this->db->from('cat_automotive');
        $this->db->where('sub_id=15');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


   
        function get_automotivex3()
     {
        $this->db->select('*');
        $this->db->from('cat_automotive');
        $this->db->where('sub_id=16');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_automotivex4()
     {
        $this->db->select('*');
        $this->db->from('cat_automotive');
        $this->db->where('sub_id=17');

        
        $results = $this->db->get()->result();
        return $results;
           
     }  


        function get_automotivex5()
     {
        $this->db->select('*');
        $this->db->from('cat_automotive');
        $this->db->where('sub_id=2');

        
        $results = $this->db->get()->result();
        return $results;
           
     }   


        function get_automotivex6()
     {
        $this->db->select('*');
        $this->db->from('cat_automotive');
        $this->db->where('sub_id=18');

        
        $results = $this->db->get()->result();
        return $results;
           
     } 


        function get_automotivex7()
     {
        $this->db->select('*');
        $this->db->from('cat_automotive');
        $this->db->where('sub_id=19');

        
        $results = $this->db->get()->result();
        return $results;
           
     }        
}

?>