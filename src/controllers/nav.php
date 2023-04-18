<?php
require('../src/db/database.php');
require('../src/model/nav.php');
function nav()
{
    $jsNav = "<script src='../src/assets/JS/nav.js'></script>";
    $jsCount = "<script src='../src/assets/JS/count.js'></script>";
    $cssNav = "<link href='../src/assets/css/nav.css' rel='stylesheet' />";
    $categories = categorieNav();
    return [$jsNav, $cssNav, $categories, $jsCount];
}
