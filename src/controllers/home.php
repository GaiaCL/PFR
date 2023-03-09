<?php 
require('../src/db/database.php');
require('../src/model/home.php');

function home() {
    $css = "<link href='../src/assets/css/home.css' rel='stylesheet' />";
    $js = "<script src='../src/assets/JS/productsHome.js'></script>";
    $cssNav = nav();
    $cssFooter = footer();
    $someProducts = selectSomeProducts();
    $newProducts = selectNewProducts();
    
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/home.php');
    
}