<?php 

class M_cart extends CI_Model {

   
     function get_semua()
     {
        $this->db->select("*");
        $this->db->from('cat_fashion');       
        $results = $this->db->get()->result();
        return $results;          
     }  

        // Add an item to the cart
        function validate_add_cart_item(){
            // Validate posted data, and then add the item!
            $id = $this->input->post('product_id'); // Assign posted product_id to $id
            $cty = $this->input->post('quantity'); // Assign posted quantity to $cty
             
            $this->db->where('id', $id); // Select where id matches the posted id
            $query = $this->db->get('products', 1); // Select the products where a match is found and limit the query by 1
             
            // Check if a row has matched our product id
            if($query->num_rows > 0){
             
    // We have a match!
        foreach ($query->result() as $row)
        {
            // Create an array with product information
            $data = array(
                'item_id'      => $id,
                'item_qty'     => $cty,
                'item_price'   => $row->price,
                'item_name'    => $row->name
            );
 
            // Add the data to the cart using the insert function that is available because we loaded the cart library
            $this->cart->insert($data); 
             
            return TRUE; // Finally return TRUE
        }
     
    }else{
        // Nothing found! Return FALSE! 
        return FALSE;
    }
        }

  }        
?>
