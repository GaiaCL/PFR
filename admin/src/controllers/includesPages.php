<?php
session_start();
$page="";
if(!isset($_SESSION['username'])){
    include('../templates/login.php');
    exit(); 
  }
  else if (isset($_SESSION['username'])) {
    if(isset($_GET['page'])) {
        $page = strval($_GET['page']);
        
    }
    if($page == 'acceuilAdmin'){
        include('../templates/acceuilAdmin.php');
        }
    else if($page == 'categories'){
        include('../templates/categories.php');
        }
    else if($page == 'subcategories'){
        include('../templates/subcategories.php');
        }
    else if($page == 'pics'){
        include('../templates/pictures.php');
        }
    else if($page == 'products'){
        include('../templates/products.php');
        }
    else if($page == 'specs'){
        include('../templates/specs.php');
        }
    else if($page == 'logout'){
        include('../src/model/logout.php');
        }
    else if($page == 'login'){
        include('../templates/login.php');
        }
        else if (!isset($_GET['action'])) {
            include('../templates/acceuilAdmin.php');
            }
     }