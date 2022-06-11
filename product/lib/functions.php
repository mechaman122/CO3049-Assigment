<?php

// require MySQL Connection
require ('DBController.php');

// require product Class
require ('product.php');

// DBController object
$db = new DBController();

// Product object
$product = new product($db);
$product_list = $product->getData();
