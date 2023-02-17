<?php 
session_start();
$page="";
if(!isset($_SESSION['username'])){
    require('../src/controllers/login.php');
    exit(); 
  }
  else if (isset($_SESSION['username'])) {
    if(isset($_GET['page'])) {
        $page = strval($_GET['page']);
        
    }
    if($page == 'acceuilAdmin'){
        require('../src/controllers/acceuilAdmin.php');
        }
    else if($page == 'categories'){
        require('../src/controllers/categories.php');
        }
    else if($page == 'subcategories'){
        require('../src/controllers/subcategories.php');
        }
    else if($page == 'pics'){
        require('../src/controllers/pictures.php');
        }
    else if($page == 'products'){
        require('../src/controllers/products.php');
        }
    else if($page == 'specs'){
        require('../src/controllers/specs.php');
        }
    else if($page == 'logout'){
        require('../src/model/logout.php');
        }
    else if($page == 'login'){
        require('../src/controllers/login.php');
        }
        else if (!isset($_GET['action'])) {
            require('../src/controllers/acceuilAdmin.php');
            }
     }

     if(isset($_GET['action'])) {
        $action = strval($_GET['action']);
        
        if($action == 'gestionCat'){
            require('../src/controllers/gestionCategorie.php');
            }
        else if($action == 'addCat'){
                require('../src/controllers/addCategorie.php');
                }
        else if($action == 'modificationCat'){
            require('../src/controllers/modificationCat.php');
            }
        else if($action == 'gestionSubCat'){
        require('../src/controllers/gestionSubCat.php');
        }
        else if($action == 'addSubCat'){
        require('../src/controllers/addSubCat.php');
        }
        else if($action == 'modificationSubCat'){
        require('../src/controllers/modificationSubCat.php');
        }
        else if($action == 'gestionImages'){
        require('../src/controllers/gestionImages.php');
        }
        else if($action == 'addImages'){
        require('../src/controllers/addImages.php');
        }
        else if($action == 'modificationImages'){
        require('../src/controllers/modificationImages.php');
        }
        else if($action == 'gestionProduits'){
        require('../src/controllers/gestionProduits.php');
        }
        else if($action == 'addProduits'){
        require('../src/controllers/addProduits.php');
        }
        else if($action == 'modificationProduits'){
        require('../src/controllers/modificationProduits.php');
        }
        else if($action == 'gestionSpecs'){
        require('../src/controllers/gestionSpecs.php');
        }
        else if($action == 'addSpecs'){
        require('../src/controllers/addSpecs.php');
        }
        else if($action == 'modificationSpecs'){
        require('../src/controllers/modificationSpecs.php');
        }
        else if($action == 'specsSizes'){
        require('../src/controllers/specsSizes.php');
        }
        else if($action == 'specsColors'){
        require('../src/controllers/specsColors.php');
        }
    }
    else {

    }