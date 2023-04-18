<?php 
require('../src/model/aboutus.php');

function aboutUS() {
    $css = "<link href='../src/assets/css/aboutus.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $jsCount = $navStmt[3];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/aboutus.php');
    
}