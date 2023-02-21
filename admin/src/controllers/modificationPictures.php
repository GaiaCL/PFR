<?php 
require('../src/db/database.php');
require('../src/model/modificationPictures.php');
function modPictures(){
    $modPictures = selectModifPictures();
    $firstMod = $modPictures[0];
    $secondMod = $modPictures[1];
    $thirdMod = $modPictures[2];
    require('../templates/modificationPictures.php');
}