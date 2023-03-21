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
    $subCat = subCategorie();
    $cssNav = nav();
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/productSC.php');
    
}