<?php 
require('../src/db/database.php');
require('../src/model/manageCategorie.php');

function manageCategorie(){
    $categories = requestCategorieManagement();
    require('../templates/manageCategorie.php');
}