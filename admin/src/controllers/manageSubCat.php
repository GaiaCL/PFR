<?php 
require('../src/db/database.php');
require('../src/model/manageSubCat.php');
function manageSubCategorie(){
    deleteSubCategorie();
    $tabSubCategories = requestSubCategorieManagement();
    $subCategories = $tabSubCategories[0];
    $currentPage = $tabSubCategories[1];
    $pages = $tabSubCategories[2];
    require('../templates/manageSubCat.php');
}