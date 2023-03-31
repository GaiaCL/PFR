<?php 
require('../src/model/login.php');

function login() { 
    $js='';
    $css = "<link href='../src/assets/css/login.css' rel='stylesheet' />";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $login = loginStmt();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/login.php');    
}