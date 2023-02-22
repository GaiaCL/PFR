<?php 
require('../src/db/database.php');
require('../src/model/modificationSubCat.php');
function modSubCategorie(){
    $SCs = selectCat();
    $modSubCat = selectModifSubCat();
    $firstMod = $modSubCat[0];
    $secondMod = $modSubCat[1];
    require('../templates/modificationSubCat.php');
}