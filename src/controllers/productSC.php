<?php 
require('../src/model/productSC.php');

function productSC() { 
    $js='';
    $css = "<link href='../src/assets/css/productSC.css' rel='stylesheet' />";
    $cssFooter = footer();
    $tabProd = getSubCategorieProducts();
    $products = $tabProd[0];
    $currentPage = $tabProd[1];
    $pages = $tabProd[2];
    $SC= subCategorie();
    $subCategorie = $SC[0];
    $desc = $SC[1];
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $jsCount = $navStmt[3];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/productSC.php');
    
}