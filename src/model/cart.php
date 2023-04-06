<?php 

function addToCart() {
    $identCustomer = $_SESSION['ident_customer'];
    $quantity = $_POST['quantity'];
    $idProduct = $_POST['id_product'];
    $stmt = dbConnect()->prepare("INSERT INTO `cart` (quantity, ident_customer, id_product) VALUES (:quantity, :ident_customer, :id_product)");
            $stmt->bindValue(":quantity", $quantity, PDO::PARAM_INT);
            $stmt->bindValue(":ident_customer", $identCustomer, PDO::PARAM_INT);
            $stmt->bindValue(":id_product", $idProduct, PDO::PARAM_INT);
            $stmt->execute();
}