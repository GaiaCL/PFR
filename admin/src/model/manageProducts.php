<?php
function deleteProducts(){
if(isset($_GET['id'])){
    $catID = $_GET['id'];
    $reqDelete = 'DELETE FROM `products` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($reqDelete);
    $adminDelete->bindValue(':id', $catID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }}

 function requestProductsManagement() {
    $sql = 'SELECT*FROM `products`';
    $query = dbconnect()->prepare($sql);
    $query->execute();
    $products = $query->fetchAll(PDO::FETCH_ASSOC);
    return $products;
    }