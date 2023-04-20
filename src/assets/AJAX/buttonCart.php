<?php 
session_start();

require('../../db/database.php');

$id_cart = strip_tags($_GET['id']);
$quantity = strip_tags($_GET['quantity']);

$query = 'UPDATE cart SET quantity=:quantity WHERE ident_customer = :ident_customer AND id_cart = :id_cart';
$req = dbConnect()->prepare($query);
$req->bindValue(':ident_customer', $_SESSION['ident_customer'], PDO::PARAM_INT);
$req->bindValue(':id_cart', $id_cart, PDO::PARAM_INT);
$req->bindValue(':quantity', $quantity, PDO::PARAM_INT);
$req->execute();

echo intval($quantity);