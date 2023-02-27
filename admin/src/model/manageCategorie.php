<?php
function deleteCategorie() {
    if(isset($_GET['id'])){
    $catID = $_GET['id'];
    $stmtDelete = 'DELETE FROM `categories` WHERE id = :id';
    $adminDelete = dbconnect()->prepare($stmtDelete);
    $adminDelete->bindValue(':id', $catID, PDO::PARAM_INT);
    $adminDelete ->execute();
}
 }
 function requestCategorieManagement() {
$sql = 'SELECT*FROM `categories`';
$query = dbconnect()->prepare($sql);
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
return $categories;
}