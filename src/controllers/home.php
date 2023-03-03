<?php 
require('../src/lib/database.php');
require('../src/model/home.php');
function home() {
    require('../templates/nav.php');
    require('../templates/home.php');
    $products = selectProducts();
}