<?php 
require('../src/model/login.php');

function login() { 
    $js='';
    $css = "<link href='../src/assets/css/login.css' rel='stylesheet' />";
    $cssFooter = footer();
    $cssNav = nav();
    $login = loginStmt();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/login.php');    
}