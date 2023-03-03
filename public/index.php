<?php
    
if(!isset($_GET['page'])) {
    require('../src/controllers/home.php');
    home();
    }
     else if(isset($_GET['page'])) {
    $page = strval($_GET['page']);
        if ($page == "Home"){
            require('../src/controllers/home.php');
            home();
        }
}