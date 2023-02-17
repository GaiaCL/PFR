<?php 

if(isset($_GET['action'])) {
        $action = strval($_GET['action']);
        
        if($action == 'gestionCat'){
            include('../templates/gestionCategorie.php');
            }
        else if($action == 'addCat'){
                include('../templates/addCategorie.php');
                }
        else if($action == 'modificationCat'){
            include('../templates/modificationCat.php');
            }
        else if($action == 'gestionSubCat'){
        include('../templates/gestionSubCat.php');
        }
        else if($action == 'addSubCat'){
        include('../templates/addSubCat.php');
        }
        else if($action == 'modificationSubCat'){
        include('../templates/modificationSubCat.php');
        }
        else if($action == 'gestionImages'){
        include('../templates/gestionImages.php');
        }
        else if($action == 'addImages'){
        include('../templates/addImages.php');
        }
        else if($action == 'modificationImages'){
        include('../templates/modificationImages.php');
        }
        else if($action == 'gestionProduits'){
        include('../templates/gestionProduits.php');
        }
        else if($action == 'addProduits'){
        include('../templates/addProduits.php');
        }
        else if($action == 'modificationProduits'){
        include('../templates/modificationProduits.php');
        }
        else if($action == 'gestionSpecs'){
        include('../templates/gestionSpecs.php');
        }
        else if($action == 'addSpecs'){
        include('../templates/addSpecs.php');
        }
        else if($action == 'modificationSpecs'){
        include('../templates/modificationSpecs.php');
        }
        else if($action == 'specsSizes'){
        include('../templates/specsSizes.php');
        }
        else if($action == 'specsColors'){
        include('../templates/specsColors.php');
        }
    }
    else {

    }
    