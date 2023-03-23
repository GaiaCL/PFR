<?php 
require('../src/db/database.php');
require('../src/model/login.php');
function login() {
    $message = loginStmt();
    require('../templates/login.php');
}