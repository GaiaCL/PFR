<?php 
require('../src/db/database.php');
require('../src/model/addProducts.php');
function addProducts(){
    selectSubCat();
    $msg = insertProducts();
    require('../templates/addProducts.php');
}