<?php
require('../src/model/update.php');

function update()
{
    $css = "<link href='../src/assets/css/update.css' rel='stylesheet' />";
    $js = "";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $accountSelect = accountSelection();
    $accounts = $accountSelect[0];
    $msg = $accountSelect[1];
    $msgPassword = $accountSelect[2];
    require('../templates/nav.php');
    require('../templates/footer.php');
    require('../templates/update.php');
}
