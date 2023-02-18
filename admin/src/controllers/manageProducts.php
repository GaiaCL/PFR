<?php 
require('../src/db/database.php');
require('../src/model/manageProducts.php');

function manageProducts(){
    deleteProducts();
    $products = requestProductsManagement();
    require('../templates/manageProducts.php');
}