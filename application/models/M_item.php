<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_item extends CI_Model {

    /**
     * @name string TABLE_NAME Holds the name of the table in use by this model
     */
    const TABLE_NAME = '';

    /**
     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
     */
    const PRI_INDEX = 'sub_cat_id';

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
            $this->load->database();
    }

    public function get($where = NULL , $table = null) {
        $this->db->select('*');
        $this->db->from($table);
        if ($where !== NULL) {
            if (is_array($where)) {
                foreach ($where as $field=>$value) {
                    $this->db->where($field, $value);
                }
            } else {
                $this->db->where(self::PRI_INDEX, $where);
            }
        }
        $result = $this->db->get()->result();
        if ($result) {
            if ($where !== NULL) {
                return array_shift($result);
            } else {
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Inserts new data into database
     *
     * @param Array $data Associative array with field_name=>value pattern to be inserted into database
     * @return mixed Inserted row ID, or false if error occured
     */
    public function insert(Array $data) {
        if ($this->db->insert(self::TABLE_NAME, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    /**
     * Updates selected record in the database
     *
     * @param Array $data Associative array field_name=>value to be updated
     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
     * @return int Number of affected rows by the update query
     */
    public function update(Array $data, $where = array()) {
            if (!is_array($where)) {
                $where = array(self::PRI_INDEX => $where);
            }
        $this->db->update(self::TABLE_NAME, $data, $where);
        return $this->db->affected_rows();
    }

    /**
     * Deletes specified record from the database
     *
     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
     * @return int Number of rows affected by the delete query
     */
    public function delete($where = array()) {
        if (!is_array()) {
            $where = array(self::PRI_INDEX => $where);
        }
        $this->db->delete(self::TABLE_NAME, $where);
        return $this->db->affected_rows();
    }

    function get_search($match=NULL,$table=NULL) {
        
        if($table!=NULL)
        {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->like('item_name',$match);
          $result = $this->db->get()->result();
          
          return $result;
        } else
        {

            return false;

        }
        
          
    } 

    function get_shop()
    {
        $this->db->select('*');
        $this->db->from('cat_fashion');
        $this->db->where('sub_id=9');

        
        $results = $this->db->get()->result();
        return $results;
           
    }   
     

    //keluarkan semua item page souqshop2
    function get_allz1()
    {
        $this->db->select("*");
        $this->db->from('cat_fashion');       
        $results = $this->db->get()->result();
        return $results;          
    }  

    function get_allz2()
    {
        $this->db->select("*");
        $this->db->from('cat_electronics');        
        $results = $this->db->get()->result();
        return $results;          
    }  

    function get_allz3()
    {
        $this->db->select("*");
        $this->db->from('cat_travel');        
        $results = $this->db->get()->result();
        return $results;          
    } 

    function get_allz4()
    {
        $this->db->select("*");
        $this->db->from('cat_automotive');        
        $results = $this->db->get()->result();
        return $results;          
    } 

    function get_allz5()
    {
        $this->db->select("*");
        $this->db->from('cat_business');        
        $results = $this->db->get()->result();
        return $results;          
    }//tutup keluarkan semua item page souqshop2

     //function utk cart & checkout page
     // Insert buyer details in "sa_buyer" table in database.
     public function insert_customer($data)
     {
        $this->db->insert('customers', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;      
     }

     //function untuk cart page and checkout
     // Insert order date with buyer id in "sa_order" table in database.
     public function insert_order($data)
     {
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
     }

     // Insert ordered product detail in "sa_cart" table in database.
     public function insert_order_detail($data)
     {
        $this->db->insert('order_detail', $data);
     }//tutup function utk cart & checkout page

}

?>