<?php 
require('../src/db/database.php');
require('../src/model/contact.php');

function contact(){
    $contacts = requestContactManagement();
    require('../templates/contact.php');
}