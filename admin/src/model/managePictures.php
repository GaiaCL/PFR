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
    if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
        $currentPage = (int) strip_tags($_GET['pagenb']);
    }else{
        $currentPage = 1;
    }
    $sql = 'SELECT COUNT(*) AS nb_pictures FROM `pictures`;';
    $query = dbConnect()->prepare($sql);
    $query->execute();
    $result = $query->fetch();
    $nbPictures = (int) $result['nb_pictures'];
    $parPage = 4;
    $pages = ceil($nbPictures / $parPage);
    $premier = ($currentPage * $parPage) - $parPage;
    $sql = 'SELECT * FROM `pictures`  LIMIT :premier, :parpage;';
    $query = dbConnect()->prepare($sql);
    $query->bindValue(':premier', $premier, PDO::PARAM_INT);
    $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $query->execute();
    $pictures = $query->fetchAll(PDO::FETCH_ASSOC);
      return [$pictures, $currentPage, $pages];
    }