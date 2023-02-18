<?php
    if(isset($_GET['id'])){
    $sizesID = $_GET['id'];
    $reqDelete = 'DELETE FROM `size` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($reqDelete);
    $adminDelete->bindValue(':id', $sizesID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }
if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
    $currentPage = (int) strip_tags($_GET['pagenb']);
}else{
    $currentPage = 1;
}
$sql = 'SELECT COUNT(*) AS nb_size FROM `size`;';
$query = dbConnect()->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbSize = (int) $result['nb_size'];
$parPage = 10;
$pages = ceil($nbSize / $parPage);
$premier = ($currentPage * $parPage) - $parPage;
$sql = 'SELECT * FROM `size`  LIMIT :premier, :parpage;';
$query = dbConnect()->prepare($sql);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();
$sizes = $query->fetchAll(PDO::FETCH_ASSOC);
