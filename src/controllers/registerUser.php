<?php 
require('../src/model/registerUser.php');

function registerUser() { 
    $js='';
    $css = "<link href='../src/assets/css/registerUser.css' rel='stylesheet' />";
    $cssFooter = footer();
    $cssNav = nav();
    $registerStmt = registerStmt();
    $pw = $registerStmt[0];
    $register = $registerStmt[1];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/registerUser.php');
    
    
}