<?php 
session_start();

require('../model/cart.php');

if(!isset($_POST['addCart'])){

}
else if(isset($_POST['addCart'])){
    addToCart();
}

header('location: ../../public/index.php?page=Product&id='.$_POST['id_cat']);