<?php
require('../src/model/account.php');

function account() {
    $css = "<link href='../src/assets/css/account.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $cssNav = nav();
    $accountInfos = accountSelect();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/account.php');
    
}