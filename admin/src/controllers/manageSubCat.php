<?php 
require('../src/db/database.php');
require('../src/model/manageSubCat.php');
function manageSubCategorie(){
    deleteSubCategorie();
    $subCategories = requestSubCategorieManagement();
    require('../templates/manageSubCat.php');
}