<?php 
session_start();

require('../model/cart.php');

if(!isset($_POST['addCart'])){

}
else if(isset($_POST['addCart'])){
    addToCart();
}

if($_POST['page'] == "Product"){
    header('location: ../../public/index.php?page=Product&id='.$_POST['id_cat']);
}
else if ($_POST['page'] == "productSC"){
    header('location: ../../public/index.php?page=productSC&id='.$_POST['id_sub_cat']);
}