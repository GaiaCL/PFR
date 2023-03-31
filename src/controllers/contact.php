<?php 
require('../src/model/contact.php');

function contact() {
    $css = "<link href='../src/assets/css/contact.css' rel='stylesheet' />";
    $js = "<script src='../src/assets/JS/map.js' crossorigin=''></script>";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/contact.php');
    
}