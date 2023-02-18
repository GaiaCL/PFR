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
    else if($page == 'manageCat'){
            require('../src/controllers/manageCategorie.php');
            manageCategorie();
            }
    else if($page == 'addCat'){
        require('../src/controllers/addCategorie.php');
        addCategorie();
            }
    else if($page == 'modificationCat'){
        require('../src/controllers/modificationCat.php');
        modCategorie();
        }
    else if($page == 'manageSubCat'){
    require('../src/controllers/manageSubCat.php');
    manageSubCat();
    }
    else if($page == 'addSubCat'){
    require('../src/controllers/addSubCat.php');
    addSubCat();
    }
    else if($page == 'modificationSubCat'){
    require('../src/controllers/modificationSubCat.php');
    modSubCat();
    }
    else if($page == 'managePictures'){
    require('../src/controllers/managePictures.php');
    managePictures();
    }
    else if($page == 'addPictures'){
    require('../src/controllers/addPictures.php');
    addPictures();
    }
    else if($page == 'modificationPictures'){
    require('../src/controllers/modificationPictures.php');
    modPictures();
    }
    else if($page == 'manageProducts'){
    require('../src/controllers/manageproducts.php');
    manageProducts();
    }
    else if($page == 'addproducts'){
    require('../src/controllers/addproducts.php');
    addProducts();
    }
    else if($page == 'modificationproducts'){
    require('../src/controllers/modificationproducts.php');
    modProducts();
    }
    else if($page == 'manageSpecs'){
    require('../src/controllers/manageSpecs.php');
    manageSpecs();
    }
    else if($page == 'addSpecs'){
    require('../src/controllers/addSpecs.php');
    addSpecs();
    }
    else if($page == 'modificationSpecs'){
    require('../src/controllers/modificationSpecs.php');
    modSpecs();
    }
    else if($page == 'specsSizes'){
    require('../src/controllers/specsSizes.php');
    specsSize();
    }
    else if($page == 'specsColors'){
    require('../src/controllers/specsColors.php');
    specsSize();
        }
        else{
            require('../src/controllers/login.php');
            login();
            }
        }