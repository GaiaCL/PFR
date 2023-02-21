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
    manageSubCategorie();
    }
    else if($page == 'addSubCat'){
    require('../src/controllers/addSubCat.php');
    addSubCategorie();
    }
    else if($page == 'modificationSubCat'){
    require('../src/controllers/modificationSubCat.php');
    modSubCategorie();
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
    require('../src/controllers/manageProducts.php');
    manageProducts();
    }
    else if($page == 'addProducts'){
    require('../src/controllers/addProducts.php');
    addProducts();
    }
    else if($page == 'modificationProducts'){
    require('../src/controllers/modificationProducts.php');
    modProducts();
    }
    else if($page == 'manageSpecsColors'){
    require('../src/controllers/manageSpecs.php');
    manageColorsSpecs();
    }
    else if($page == 'manageSpecsSizes'){
    require('../src/controllers/manageSpecs.php');
    manageSizesSpecs();
    }
    else if($page == 'addSpecsColors'){
    require('../src/controllers/addSpecs.php');
    addSpecsColors();
    }
    else if($page == 'addSpecsSizes'){
    require('../src/controllers/addSpecs.php');
    addSpecsSizes();
    }
    else if($page == 'modificationSpecsColors'){
    require('../src/controllers/modificationSpecs.php');
    modifColorsSpecs();
    }
    else if($page == 'modificationSpecsSizes'){
    require('../src/controllers/modificationSpecs.php');
    modifSizesSpecs();
    }
        else{
            require('../src/controllers/login.php');
            login();
            }
        }