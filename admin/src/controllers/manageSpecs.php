<?php 
require('../src/db/database.php');
require('../src/model/manageSpecs.php');

function manageColorsSpecs(){
    deleteColors();
    $name= 'Colors';
    $nameSpec = 'Couleurs';
    $specs = requestColorsManagement();
    require('../templates/manageSpecs.php');
}
function manageSizesSpecs(){
    deleteSizes();
    $name= 'Sizes';
    $nameSpec = 'Tailles';
    $specs = requestSizesManagement();
    require('../templates/manageSpecs.php');
}