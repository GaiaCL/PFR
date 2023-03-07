<?php 
require('../src/db/database.php');
require('../src/model/home.php');

function home() {
    $js = "<script src='../src/assets/JS/productsHome.js'></script>";
        $someProducts = selectSomeProducts();
        $newProducts = selectNewProducts();
    require('../templates/nav.php');
    require('../templates/home.php');
    
}