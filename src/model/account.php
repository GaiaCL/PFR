<?php 

function accountSelect(){
    $username = $_SESSION['username'];
    $stmt = dbConnect()->prepare('SELECT*FROM customers WHERE username = :username');
    $stmt->bindValue(":username", $username, PDO::PARAM_STR);
    $stmt->execute();
    $accountInfos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $accountInfos;
}