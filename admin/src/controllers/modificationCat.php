<?php 
require('../src/db/database.php');
require('../src/model/modificationCategorie.php');
function modCategorie(){
    $modCat = selectModifCat();
    $firstMod = $modCat[0];
    $secondMod = $modCat[1];
    require('../templates/modificationCat.php');
}