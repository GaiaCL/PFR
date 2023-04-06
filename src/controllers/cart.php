<?php 
require('../src/model/cart.php');

function cart() {
    $css = "<link href='../src/assets/css/cart.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/cart.php');
    
}