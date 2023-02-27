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
    $sql = 'SELECT*FROM `sub_categories`';
    $query = dbconnect()->prepare($sql);
    $query->execute();
    $subCategories = $query->fetchAll(PDO::FETCH_ASSOC);
    return $subCategories;
    }
