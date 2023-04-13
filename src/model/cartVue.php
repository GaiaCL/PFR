<?php

function selectCart() {
    $identCustomer = $_SESSION['ident_customer'];
    $stmt = dbConnect()->prepare('SELECT *FROM cart as c 
    INNER JOIN products as p ON c.id_products = p.id 
    INNER JOIN illustrate_products as ip ON ip.id_products = p.id 
    INNER JOIN pictures as pi ON ip.id_pictures = pi.id 
    INNER JOIN specs as s ON s.id_products = p.id 
    INNER JOIN size as si ON si.id = s.id_size
    INNER JOIN colors as col ON col.id = s.id_colors 
    WHERE ident_customer = :ident_customer');
    $stmt->bindValue(':ident_customer', $identCustomer, PDO::PARAM_INT);
    $stmt->execute();
    $cartProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $cartProducts;
}