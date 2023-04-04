<?php 
require('../src/db/database.php');
require('../src/model/modificationProducts.php');
function modProducts(){
    $SCs = selectSubCat();
    $modProducts = selectModifProducts();
    $firstMod = $modProducts[0];
    $secondMod = $modProducts[1];
    $thirdMod = $modProducts[2];
    $fourthMod = $modProducts[3];
    $fifthMod = $modProducts[4];
    require('../templates/modificationProducts.php');
}