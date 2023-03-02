<?php
    function deleteSubCategorie() {
        if(isset($_GET['id'])){
        $catID = $_GET['id'];
        $stmtDelete = 'DELETE FROM `sub_categories` WHERE id = :id';
        $adminDelete = dbconnect()->prepare($stmtDelete);
        $adminDelete->bindValue(':id', $catID, PDO::PARAM_INT);
        $adminDelete ->execute();
    }
}
function requestSubCategorieManagement() {
    if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
        $currentPage = (int) strip_tags($_GET['pagenb']);
    }else{
        $currentPage = 1;
    }
    $sql = 'SELECT COUNT(*) AS nb_sub_categories FROM `sub_categories`;';
    $query = dbConnect()->prepare($sql);
    $query->execute();
    $result = $query->fetch();
    $nbsubCategories = (int) $result['nb_sub_categories'];
    $parPage = 4;
    $pages = ceil($nbsubCategories / $parPage);
    $premier = ($currentPage * $parPage) - $parPage;
    $sql = 'SELECT sc.id_categorie, sc.id, sc.name, sc.description, c.name as nameCat FROM `sub_categories` as sc INNER JOIN categories as c ON sc.id_categorie = c.id LIMIT :premier, :parpage;';
    $query = dbConnect()->prepare($sql);
    $query->bindValue(':premier', $premier, PDO::PARAM_INT);
    $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $query->execute();
    $subCategories = $query->fetchAll(PDO::FETCH_ASSOC);
      return [$subCategories, $currentPage, $pages];
    }
