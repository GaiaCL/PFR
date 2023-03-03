<?php

function selectProducts(){
    $sql = 'SELECT*FROM illustrate_products';
    $stmt = dbConnect()->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

