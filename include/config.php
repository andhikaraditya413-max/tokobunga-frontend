<?php

$api_url = "http://localhost:8000/api/products.php";


function fetchProducts() {
    global $api_url;
    
    $response = @file_get_contents($api_url);
    if ($response === false) {
        return [];
    }
    
    return json_decode($response, true);
}