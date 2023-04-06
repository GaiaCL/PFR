<?php 

function categorieNav(){
    $stmt = dbConnect()->prepare('SELECT*FROM categories');
    $stmt->execute();
    $categories = $stmt->fetchAll();
    return $categories;
}

function subCategorieNav($catId){
    $stmt = dbConnect()->prepare('SELECT sc.id as scid, sc.name_sub_categorie as scn FROM sub_categories as sc INNER JOIN categories as c on c.id = sc.id_categorie WHERE c.id = '.$catId.'');
    $stmt->execute();
    $subCategories = $stmt->fetchAll();
    return $subCategories;
}