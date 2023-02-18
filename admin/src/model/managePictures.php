<?php

if(isset($_GET['id'])){
    $catID = $_GET['id'];
    $reqDelete = 'DELETE FROM `pictures` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($reqDelete);
    $adminDelete->bindValue(':id', $catID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }
if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
    $currentPage = (int) strip_tags($_GET['pagenb']);
}else{
    $currentPage = 1;
}
$sql = 'SELECT COUNT(*) AS nb_pics FROM `pictures`;';
$query = dbConnect()->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbPics = (int) $result['nb_pics'];
$parPage = 5;
$pages = ceil($nbPics / $parPage);
$premier = ($currentPage * $parPage) - $parPage;
$sql = 'SELECT * FROM `pictures`  LIMIT :premier, :parpage;';
$query = dbConnect()->prepare($sql);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();
$pictures = $query->fetchAll(PDO::FETCH_ASSOC);
