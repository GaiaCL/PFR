<?php
require('../src/model/update.php');

function update() {
    $css = "<link href='../src/assets/css/update.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $accounts = accountSelection();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/update.php');
    
}