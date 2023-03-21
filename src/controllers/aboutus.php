<?php 
require('../src/model/aboutus.php');

function aboutUS() {
    $css = "<link href='../src/assets/css/aboutus.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $cssNav = nav();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/aboutus.php');
    
}