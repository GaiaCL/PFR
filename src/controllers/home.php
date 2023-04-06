<?php
require('../src/model/home.php');

function home() {
    $css = "<link href='../src/assets/css/home.css' rel='stylesheet' />";
    $js = "<script src='../src/assets/JS/productsHome.js'></script>";
    $cssFooter = "";
    $footer = "";
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $someProducts = selectSomeProducts();
    $newProducts = selectNewProducts();
    require('../templates/nav.php'); 
    require('../templates/home.php');
    
}