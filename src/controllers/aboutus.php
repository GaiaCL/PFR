<?php 
require('../src/model/aboutus.php');

function aboutUS() {
    $css = "<link href='../src/assets/css/aboutus.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/aboutus.php');
    
}