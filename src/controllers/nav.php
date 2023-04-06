<?php
require('../src/db/database.php');
require('../src/model/nav.php');
function nav() { 
    $jsNav = "<script src='../src/assets/JS/nav.js'> </script>";
    $cssNav = "<link href='../src/assets/css/nav.css' rel='stylesheet' />";
    $categories = categorieNav();
    return[$jsNav, $cssNav, $categories];
}
