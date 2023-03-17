<?php 
require('../src/model/aboutus.php');

function aboutUS() {
    $css = "<link href='../src/assets/css/aboutus.css' rel='stylesheet' />";
    $js = "";
    $cssNav = nav();
    $cssFooter = footer();
    
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/aboutus.php');
    
}