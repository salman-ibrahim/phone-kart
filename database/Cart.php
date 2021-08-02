<?php

class Cart
{
    public $db = null;

    // Constructor
    public function __construct(DBController $db){
        if(!isset($db->con)){
            return null;
        }
        $this->db = $db;
    }

    // Insert to cart
    public function insertToCart($params = null, $table = "cart"){
        if($this->db->con != null){
            if($params != null){
                // Insert into  cart
                $columns = implode(',',array_keys($params));
                $values = implode(',', array_values($params));

                // SQL Query
                $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns,$values);
                $result = $this->db->con->query($query);
                return $result;
            }
        }
    }

    // GET User, Item and Insert to cart
    public function addToCart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $params = [
                "user_id" => $userid,
                "item_id" => $itemid
            ];
            if($this->insertToCart($params)){
                header("location:".$_SERVER['PHP_SELF']);
            }
            
        }
    }

    // Calculate sub-total
    public function getSubTotal($priceArr){
        if (isset($priceArr)) {
            $sum = 0;
            foreach($priceArr as $price){
                $sum += floatval($price[0]);
            }
            return $sum == ceil($sum)? $sum . ".00" : $sum;
        }
        else{
            return 0;
        }
    }
}