<?php
    if(isset($_GET['id'])){
    $subCatID = $_GET['id'];
    $reqDelete = 'DELETE FROM `sub_categories` WHERE id = :id';
    $adminDelete = $db ->prepare($reqDelete);
    $adminDelete->bindValue(':id', $subCatID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }
if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
    $currentPage = (int) strip_tags($_GET['pagenb']);
}else{
    $currentPage = 1;
}
$sql = 'SELECT COUNT(*) AS nb_subcat FROM `sub_categories`;';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbSubCat = (int) $result['nb_subcat'];
$parPage = 10;
$pages = ceil($nbSubCat / $parPage);
$premier = ($currentPage * $parPage) - $parPage;
$sql = 'SELECT * FROM `sub_categories`  LIMIT :premier, :parpage;';
$query = $db->prepare($sql);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();
$subCategories = $query->fetchAll(PDO::FETCH_ASSOC);
