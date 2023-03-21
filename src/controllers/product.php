<?php 
require('../src/model/product.php');

function product() { 
    $js='';
    $css = "<link href='../src/assets/css/product.css' rel='stylesheet' />";
    $cssFooter = footer();
    $tabProd = products();
    $products = $tabProd[0];
    $currentPage = $tabProd[1];
    $pages = $tabProd[2];
    $cat = categorie();
    $subCats = subCategorie();
    $newProducts = newProducts();
    $cssNav = nav();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/product.php');
    
}