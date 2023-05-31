<?php 
    session_start();

    require_once('../../db/database.php');

    $identCustomer = $_SESSION['ident_customer'];
    
    $stmt = dbConnect()->prepare('SELECT price, quantity FROM cart as c INNER JOIN products as p ON c.id_products = p.id WHERE ident_customer = :ident_customer');
    $stmt->bindValue(':ident_customer', $identCustomer, PDO::PARAM_INT);
    $stmt->execute();
    $totals = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $totalPrice = 0;
    foreach($totals as $total) {
        $totalPrice += $total['quantity'] * $total['price'];  
    }
    echo $totalPrice;
