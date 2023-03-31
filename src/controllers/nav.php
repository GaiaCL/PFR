<?php
require('../src/db/database.php');

function nav() { 
    $jsNav = "<script src='../src/assets/JS/nav.js'> </script>";
    $cssNav = "<link href='../src/assets/css/nav.css' rel='stylesheet' />";
    return [$cssNav,$jsNav];
}
