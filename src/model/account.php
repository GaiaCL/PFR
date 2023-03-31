<?php 

function accountSelect(){
    $username = $_SESSION['username_customer'];
    $stmt = dbConnect()->prepare('SELECT*FROM customers WHERE username_customer = :username_customer');
    $stmt->bindValue(":username_customer", $username, PDO::PARAM_STR);
    $stmt->execute();
    $accountInfos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $accountInfos;
}