<?php 
require('../src/db/database.php');
require('../src/model/manageSpecs.php');

function manageColorsSpecs(){
    $nameSpec = 'Couleurs';
    $specs = requestColorsManagement();
    require('../templates/manageSpecs.php');
}
function manageSizesSpecs(){
    $nameSpec = 'Tailles';
    $specs = requestSizesManagement();
    require('../templates/manageSpecs.php');
}