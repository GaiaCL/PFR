<?php
function deleteColors(){
    if(isset($_GET['id'])){
    $colorsID = $_GET['id'];
    $reqDelete = 'DELETE FROM `colors` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($reqDelete);
    $adminDelete->bindValue(':id', $colorsID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }
}
function requestColorsManagement() {
    $sql = 'SELECT*FROM `colors`';
    $query = dbconnect()->prepare($sql);
    $query->execute();
    $colors = $query->fetchAll(PDO::FETCH_ASSOC);
    return $colors;
    }

function deleteSizes(){
if(isset($_GET['id'])){
    $sizesID = $_GET['id'];
    $reqDelete = 'DELETE FROM `size` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($reqDelete);
    $adminDelete->bindValue(':id', $sizesID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }
}
function requestSizesManagement() {
    $sql = 'SELECT*FROM `size`';
    $query = dbconnect()->prepare($sql);
    $query->execute();
    $sizes = $query->fetchAll(PDO::FETCH_ASSOC);
    return $sizes;
    }