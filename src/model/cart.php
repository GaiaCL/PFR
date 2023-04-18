<?php
require('../db/database.php');
function addToCart()
{
    $quantity = 1;
    $idProduct = $_POST['id_product'];
    $identCustomer = $_SESSION['ident_customer'];

    // Check if the product is already in the cart
    $stmt = dbConnect()->prepare("SELECT * FROM cart WHERE ident_customer = :ident_customer AND id_products = :id_products");
    $stmt->bindValue(":ident_customer", $identCustomer, PDO::PARAM_INT);
    $stmt->bindValue(":id_products", $idProduct, PDO::PARAM_INT);
    $stmt->execute();
    $cart = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cart) {
        // Update the quantity of the existing product in the cart
        $quantity = $cart['quantity'] + 1;
        $stmt = dbConnect()->prepare("UPDATE cart SET quantity = :quantity WHERE id_cart = :id_cart");
        $stmt->bindValue(":quantity", $quantity, PDO::PARAM_INT);
        $stmt->bindValue(":id_cart", $cart['id_cart'], PDO::PARAM_INT);
        $stmt->execute();
    } else {
        // Add a new product to the cart
        $stmt = dbConnect()->prepare("INSERT INTO `cart` (quantity, ident_customer, id_products) VALUES (:quantity, :ident_customer, :id_products)");
        $stmt->bindValue(":quantity", $quantity, PDO::PARAM_INT);
        $stmt->bindValue(":ident_customer", $identCustomer, PDO::PARAM_INT);
        $stmt->bindValue(":id_products", $idProduct, PDO::PARAM_INT);
        $stmt->execute();
    }
}
