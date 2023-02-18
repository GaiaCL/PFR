<?php 
require('../src/db/database.php');
require('../src/model/managePictures.php');

function managePictures(){
    deletePictures();
    $pictures = requestPicturesManagement();
    require('../templates/managePictures.php');
}