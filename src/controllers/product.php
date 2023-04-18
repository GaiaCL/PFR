<?php 
require('../src/model/product.php');

function product() { 
    $js='<script src="../src/assets/JS/products.js"></script>';
    $css = "<link href='../src/assets/css/product.css' rel='stylesheet' />";
    $cssFooter = footer();
    $tabProd = products();
    $products = $tabProd[0];
    $currentPage = $tabProd[1];
    $pages = $tabProd[2];
    $cat = categorie();
    $catNC = $cat[0];
    $catD = $cat[1];
    $subCats = subCategorie();
    $newProducts = newProducts();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $jsCount = $navStmt[3];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/product.php');
    
}