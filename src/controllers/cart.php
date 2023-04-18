<?php 
require('../src/model/cartVue.php');

function cart() {
    $css = "<link href='../src/assets/css/cart.css' rel='stylesheet' />";
    $js = "<script src='../src/assets/JS/buttonCart.js'></script>";
    $cssFooter = footer();
    $navStmt = nav();
    $cssNav = $navStmt[0];
    $jsNav = $navStmt[1];
    $cats = $navStmt[2];
    $jsCount = $navStmt[3];
    $cartProducts = selectCart();
    if(isset($_GET['idCart'])) {
        deleteCart($_GET['idCart']);
        // Redirect the user back to the cart page after the item has been removed
        header('Location: index.php?page=Cart');
        exit();
    }
    $total = total();
    $totalPrice = $total[0];
    $totalItems = $total[1];
    require('../templates/nav.php'); 
    require('../templates/footer.php');
    require('../templates/cart.php');
    
}