<?php 
require('../src/db/database.php');
require('../src/model/manageProducts.php');

function manageProducts(){
    deleteProducts();
    $tabProducts = requestProductsManagement();
    $products = $tabProducts[0];
    $currentPage = $tabProducts[1];
    $pages = $tabProducts[2];
    require('../templates/manageProducts.php');
}