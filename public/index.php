<?php
session_start();

$idCustomer = time();
if(!isset($_SESSION['ident_customer'])){
    $_SESSION['ident_customer'] = $idCustomer;
}

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
         else if ($page == "Cart"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/cart.php');
            cart();
        }
        else if ($page == "Update"){
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');   
            require('../src/controllers/update.php');
            update();
        }
        else {
            require('../src/controllers/nav.php');
            require('../src/controllers/footer.php');
            require('../src/controllers/home.php');
            home();
        }

    
}
