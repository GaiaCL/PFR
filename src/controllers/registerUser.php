<?php 
require('../src/model/registerUser.php');

function registerUser() { 
    $js='';
    $css = "<link href='../src/assets/css/registerUser.css' rel='stylesheet' />";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $registerStmt = registerStmt();
    $pw = $registerStmt[0];
    $register = $registerStmt[1];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/registerUser.php');
    
    
}