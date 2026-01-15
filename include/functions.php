<?php

function getAllProducts() {
    $json = file_get_contents(API_PRODUCTS);
    return json_decode($json, true);
}
