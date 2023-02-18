<?php 
require('../src/db/database.php');
require('../src/model/manageProducts.php');

function manageProducts(){
    $products = requestProductsManagement();
    require('../templates/manageProducts.php');
}