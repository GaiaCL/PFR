<?php 
require('../src/db/database.php');
require('../src/model/addSubCat.php');
function addSubCategorie(){
    $SCs = selectCat();
    $msg = insertSubCategorie();
    require('../templates/addSubCat.php');
}