<?php 
require('../src/db/database.php');
require('../src/model/addSpecs.php');

function addSpecsColors(){
    $nameSpec = 'Couleurs';
    $msg = insertColors();
    require('../templates/addSpecs.php');
}
function addSpecsSizes(){
    $nameSpec = 'Tailles';
    $msg = insertSizes();
    require('../templates/addSpecs.php');
}