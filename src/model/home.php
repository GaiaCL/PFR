<?php

function selectSomeProducts(){
    $stmt = dbConnect()->prepare('SELECT*FROM products as p INNER JOIN illustrate_products as ip ON p.id = ip.id_products INNER JOIN pictures as pi ON pi.id = ip.id_pictures  ORDER BY RAND () LIMIT 6');
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;   
}

function selectNewProducts(){
    $stmt = dbConnect()->prepare('SELECT*FROM products as p INNER JOIN illustrate_products as ip ON p.id = ip.id_products INNER JOIN pictures as pi ON pi.id = ip.id_pictures  ORDER BY date_ajout ASC LIMIT 6');
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
