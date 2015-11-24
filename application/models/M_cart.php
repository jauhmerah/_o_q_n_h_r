<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_cart extends CI_Model {

    /**
     * @name string TABLE_NAME Holds the name of the table in use by this model
     */
    /*const TABLE_NAME = 'sa_category';

    /**
     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
     */
    /*const PRI_INDEX = 'cat_id';

    /**
     * Retrieves record(s) from the database
     *
     * @param mixed $where Optional. Retrieves only the records matching given criteria, or all records if not given.
     *                      If associative array is given, it should fit field_name=>value pattern.
     *                      If string, value will be used to match against PRI_INDEX
     * @return mixed Single record if ID is given, or array of results
     */
    function __construct() {
            parent::__construct();
            /*$this->load->database();*/
    }

    function findAll()

    {
        return $this->db->get('cat_electronics')->result();

    }

   function find($item_id)
   {
    $this->db->where('item_id',$item_id);
    return $this->db->get('cat_electronics')->row();
   }
  }        
?>
