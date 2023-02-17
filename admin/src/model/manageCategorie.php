<?php
function deleteCategorie() {
    if(isset($_GET['id'])){
    $catID = $_GET['id'];
    $reqDelete = 'DELETE FROM `categories` WHERE id = :id';
    $adminDelete = dbconnect()->prepare($reqDelete);
    $adminDelete->bindValue(':id', $catID, PDO::PARAM_INT);
    $adminDelete ->execute();
}
 }
 function requestCategorieManagement() {
if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
    $currentPage = (int) strip_tags($_GET['pagenb']);
}else{
    $currentPage = 1;
}
$sql = 'SELECT COUNT(*) AS nb_cat FROM `categories`;';
$query = dbconnect()->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbCat = (int) $result['nb_cat'];
$parPage = 10;
$pages = ceil($nbCat / $parPage);
$premier = ($currentPage * $parPage) - $parPage;
$sql = 'SELECT * FROM `categories`  LIMIT :premier, :parpage;';
$query = dbconnect()->prepare($sql);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
return $categories;

}