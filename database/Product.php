<?php

// Fetch product data
class Product 
{
    public $db = null;

    // Constructor
    public function __construct(DBController $db){
        if(!isset($db->con)){
            return null;
        }
        $this->db = $db;
    }

    // Fetch the product data
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $productsArray = [];

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $productsArray[] = $item;
        }

        return $productsArray;
    }

    public function getProduct($item_id = null, $table = 'product'){
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");
            
            $selected_product = array();
            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $selected_product[] = $item;
            }
    
            return $selected_product;
        }
    }
}