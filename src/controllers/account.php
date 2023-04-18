<?php
require('../src/model/account.php');

function account() {
    $css = "<link href='../src/assets/css/account.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $jsCount = $navStmt[3];
    $accountInfos = accountSelect();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/account.php');
    
}