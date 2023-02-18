<?php 
require('../src/db/database.php');
require('../src/model/manageCategorie.php');

function manageCategorie(){
    deleteCategorie();
    $categories = requestCategorieManagement();
    require('../templates/manageCategorie.php');
}