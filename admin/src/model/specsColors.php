<?php
    if(isset($_GET['id'])){
    $colorsID = $_GET['id'];
    $reqDelete = 'DELETE FROM `colors` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($reqDelete);
    $adminDelete->bindValue(':id', $colorsID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }
if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
    $currentPage = (int) strip_tags($_GET['pagenb']);
}else{
    $currentPage = 1;
}
$sql = 'SELECT COUNT(*) AS nb_colors FROM `colors`;';
$query = dbConnect()->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbColors = (int) $result['nb_colors'];
$parPage = 10;
$pages = ceil($nbColors / $parPage);
$premier = ($currentPage * $parPage) - $parPage;
$sql = 'SELECT * FROM `colors`  LIMIT :premier, :parpage;';
$query = dbConnect()->prepare($sql);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();
$colors = $query->fetchAll(PDO::FETCH_ASSOC);
