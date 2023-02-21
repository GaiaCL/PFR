<?php 
require('../src/db/database.php');
require('../src/model/modificationSpecs.php');

function modifColorsSpecs(){
    $specs = selectModifColors();
    $typeSpecs = $specs[0];
    $isEnabled = $specs[1];
    require('../templates/modificationSpecs.php');
}
function modifSizesSpecs(){
    $specs = selectModifSizes();
    $typeSpecs = $specs[0];
    $isEnabled = $specs[1];
    require('../templates/modificationSpecs.php');
}