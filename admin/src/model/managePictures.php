<?php
function deletePictures() {
if(isset($_GET['id'])){
    $catID = $_GET['id'];
    $stmtDelete = 'DELETE FROM `pictures` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($stmtDelete);
    $adminDelete->bindValue(':id', $catID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }
}

function requestPicturesManagement() {
    $sql = 'SELECT*FROM `pictures`';
    $query = dbconnect()->prepare($sql);
    $query->execute();
    $pictures = $query->fetchAll(PDO::FETCH_ASSOC);
    return $pictures;
    }