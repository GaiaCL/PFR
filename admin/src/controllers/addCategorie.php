<?php 
require('../src/db/database.php');
require('../src/model/addCategorie.php');
function addCategorie(){
   $msg = insertCategorie();
    require('../templates/addCategorie.php');
}