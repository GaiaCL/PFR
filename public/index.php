<?php
session_start();
if(!isset($_GET['page'])) {
    require('../src/controllers/nav.php');
    require('../src/controllers/footer.php');
    require('../src/controllers/home.php');
    home();
    
    }
     else  {
    $page = strval($_GET['page']);
        if ($page == "Product"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/product.php');
            product();
        }
        else if ($page == "productSC"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/productSC.php');
            productSC();
        }
        else if ($page == "Contact"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/contact.php');
            contact();
        }
        else if ($page == "AboutUs"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/aboutus.php');
            aboutUs();
        }
        else if ($page == "Register"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/registerUser.php');
            registerUser();
        }
        else if ($page == "Login"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/login.php');
            login();
        }
        else if ($page == "Account"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/account.php');
            account();
        }
        else {
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');
            require('../src/controllers/home.php');
            home();
        }

    
}
if (!isset($_GET['action'])){
    
}
else {
 $action = $_GET['action'];

    if($action = "logout") {
        require('../src/model/logout.php');
}   
}