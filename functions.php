<?php
    
    ob_start();
    // Require the DB Controller
    require 'database/DBController.php';

    // Require Product Class
    require 'database/Product.php';

    // Require Cart
    require 'database/Cart.php';

    // Create DB Controller Object
    $db = new DBController();

    // Product Object
    $product = new Product($db);
    $all_products = $product->getData();

    // print_r($product->getData());

    // Cart Object
    $cart = new Cart($db);