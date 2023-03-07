<?php
    
if(!isset($_GET['page'])) {
    require('../src/controllers/home.php');
    home();
    }
     else  {
    $page = strval($_GET['page']);
        if ($page == "Product"){
            require('../src/controllers/product.php');
            product();
        }
        else {
            require('../src/controllers/home.php');
            home();
        }
}