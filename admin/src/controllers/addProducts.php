<?php 
require('../src/db/database.php');
require('../src/model/addProducts.php');
function addProducts(){
    $SCs = selectSubCat();
    $tab = insertProducts();
    $msg = $tab[0];
    $identifier = $tab[1];
    $colors = selectSpecsColors();
    $sizes = selectSpecsSizes();
    if (isset($_POST['valider'])){
    $id = selectProduct($identifier);
    insertSpecsTable($id);
    }
    require('../templates/addProducts.php');
}