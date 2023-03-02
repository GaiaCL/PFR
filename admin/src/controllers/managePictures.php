<?php 
require('../src/db/database.php');
require('../src/model/managePictures.php');

function managePictures(){
    deletePictures();
    $tabPictures = requestPicturesManagement();
    $pictures = $tabPictures[0];
    $currentPage = $tabPictures[1];
    $pages = $tabPictures[2];
    require('../templates/managePictures.php');
}