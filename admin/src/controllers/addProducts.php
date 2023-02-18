<?php 
require('../src/db/database.php');
require('../src/model/addProducts.php');
function addProducts(){
    $SCs = selectSubCat();
    $msg = insertProducts();
    require('../templates/addProducts.php');
}