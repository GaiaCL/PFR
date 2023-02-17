<?php 
session_start();
$page="";
if(!isset($_SESSION['username'])){
    require('../src/controllers/login.php');
    login();
  }
  else if (isset($_SESSION['username'])) {
    if(isset($_GET['page'])) {
        $page = strval($_GET['page']);
        
    }
    if($page == 'homeAdmin'){
        require('../src/controllers/homeAdmin.php');
        homeAdmin();
        }
    else if($page == 'categories'){
        require('../src/controllers/categories.php');
        categories();
        }
    else if($page == 'subcategories'){
        require('../src/controllers/subcategories.php');
        subCategories();
        }
    else if($page == 'pics'){
        require('../src/controllers/pictures.php');
        pictures();
        }
    else if($page == 'products'){
        require('../src/controllers/products.php');
        products();
        }
    else if($page == 'specs'){
        require('../src/controllers/specs.php');
        specs();
        }
    else{
        require('../src/controllers/login.php');
        login();
        }
     }

     if(isset($_GET['action'])) {
        $action = strval($_GET['action']);
        
        if($action == 'manageCat'){
            require('../src/controllers/manageCategorie.php');
            manageCategorie();
            }
        else if($action == 'addCat'){
            require('../src/controllers/addCategorie.php');
            addCategorie();
                }
        else if($action == 'modificationCat'){
            require('../src/controllers/modificationCat.php');
            modCategorie();
            }
        else if($action == 'manageSubCat'){
        require('../src/controllers/manageSubCat.php');
        manageSubCat();
        }
        else if($action == 'addSubCat'){
        require('../src/controllers/addSubCat.php');
        addSubCat();
        }
        else if($action == 'modificationSubCat'){
        require('../src/controllers/modificationSubCat.php');
        modSubCat();
        }
        else if($action == 'managePictures'){
        require('../src/controllers/managePictures.php');
        managePictures();
        }
        else if($action == 'addPictures'){
        require('../src/controllers/addPictures.php');
        addPictures();
        }
        else if($action == 'modificationPictures'){
        require('../src/controllers/modificationPictures.php');
        modPictures();
        }
        else if($action == 'manageProducts'){
        require('../src/controllers/manageproducts.php');
        manageProducts();
        }
        else if($action == 'addproducts'){
        require('../src/controllers/addproducts.php');
        addProducts();
        }
        else if($action == 'modificationproducts'){
        require('../src/controllers/modificationproducts.php');
        modProducts();
        }
        else if($action == 'manageSpecs'){
        require('../src/controllers/manageSpecs.php');
        manageSpecs();
        }
        else if($action == 'addSpecs'){
        require('../src/controllers/addSpecs.php');
        addSpecs();
        }
        else if($action == 'modificationSpecs'){
        require('../src/controllers/modificationSpecs.php');
        modSpecs();
        }
        else if($action == 'specsSizes'){
        require('../src/controllers/specsSizes.php');
        specsSize();
        }
        else if($action == 'specsColors'){
        require('../src/controllers/specsColors.php');
        specsSize();
            }
    }
    else {

    }