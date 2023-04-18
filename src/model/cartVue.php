<?php

function selectCart() {
    $identCustomer = $_SESSION['ident_customer'];
    $stmt = dbConnect()->prepare('SELECT*FROM cart as c 
    INNER JOIN products as p ON c.id_products = p.id 
    INNER JOIN illustrate_products as ip ON ip.id_products = p.id 
    INNER JOIN pictures as pi ON ip.id_pictures = pi.id 
    WHERE ident_customer = :ident_customer');
    $stmt->bindValue(':ident_customer', $identCustomer, PDO::PARAM_INT);
    $stmt->execute();
    $cartProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $cartProducts;
}

function deleteCart($idProduct){
    $stmt = dbConnect()->prepare('DELETE FROM cart WHERE id_cart = :id_cart');
    $stmt->bindValue(':id_cart', $idProduct, PDO::PARAM_INT);
    $stmt->execute();
}

function total(){
    $identCustomer = $_SESSION['ident_customer'];
    $stmt = dbConnect()->prepare('SELECT price, quantity FROM cart as c INNER JOIN products as p ON c.id_products = p.id WHERE ident_customer = :ident_customer');
    $stmt->bindValue(':ident_customer', $identCustomer, PDO::PARAM_INT);
    $stmt->execute();
    $totals = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $totalPrice = 0;
    $totalItems = 0;
    foreach($totals as $total) {
        $totalPrice += $total['quantity'] * $total['price'];  
        $totalItems += 1;
    }
    return [$totalPrice, $totalItems];
}