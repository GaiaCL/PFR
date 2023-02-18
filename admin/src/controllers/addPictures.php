<?php 
require('../src/db/database.php');
require('../src/model/addPictures.php');
function addPictures(){
   $msgSend = insertPictures();
    require('../templates/addPictures.php');
}