<?php 
require('../src/model/contact.php');

function contact() {
    $css = "<link href='../src/assets/css/contact.css' rel='stylesheet' />";
    $js = "<script src='../src/assets/JS/map.js' crossorigin=''></script>";
    $cssNav = nav();
    $cssFooter = footer();
    
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/contact.php');
    
}