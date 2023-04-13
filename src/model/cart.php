<?php 
require('../db/database.php');
function addToCart() {
    $quantity = 1;
    $idProduct = $_POST['id_product'];
    $identCustomer = $_SESSION['ident_customer'];
    $stmt = dbConnect()->prepare("SELECT*FROM cart where ident_customer = :ident_customer");
    $stmt->bindValue(":ident_customer", $identCustomer, PDO::PARAM_INT);
    $stmt->execute();
    $carts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($carts)){
    foreach($carts as $cart) {
        
        if($cart['id_products'] == $idProduct) {
            $quantity = $cart['quantity'];
            $quantity += 1 ;
            $stmt = dbConnect()->prepare("UPDATE cart SET quantity = :quantity WHERE id_products = :id_products");
            $stmt->bindValue(":quantity", $quantity, PDO::PARAM_INT);
            $stmt->bindValue(":id_products", $idProduct, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            $stmt = dbConnect()->prepare("INSERT INTO `cart` (quantity, ident_customer, id_products) VALUES (:quantity, :ident_customer, :id_products)");
            $stmt->bindValue(":quantity", $quantity, PDO::PARAM_INT);
            $stmt->bindValue(":ident_customer", $identCustomer, PDO::PARAM_INT);
            $stmt->bindValue(":id_products", $idProduct, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
} else {
            $stmt = dbConnect()->prepare("INSERT INTO `cart` (quantity, ident_customer, id_products) VALUES (:quantity, :ident_customer, :id_products)");
            $stmt->bindValue(":quantity", $quantity, PDO::PARAM_INT);
            $stmt->bindValue(":ident_customer", $identCustomer, PDO::PARAM_INT);
            $stmt->bindValue(":id_products", $idProduct, PDO::PARAM_INT);
            $stmt->execute();
}
}