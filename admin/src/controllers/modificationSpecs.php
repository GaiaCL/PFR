<?php 
require('../src/db/database.php');
require('../src/model/modificationSpecs.php');

function modifColorsSpecs(){
    $typeSpecs = selectModifColors();
    require('../templates/modificationSpecs.php');
}
function modifSizesSpecs(){
    $typeSpecs = selectModifSizes();
    require('../templates/modificationSpecs.php');
}