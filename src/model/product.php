<?php

function products() {
    if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
        $currentPage = (int) strip_tags($_GET['pagenb']);
    }else{
        $currentPage = 1;
    }
    $stmt = dbConnect()->prepare('SELECT COUNT(*) AS nb_products FROM `products`;');
    $stmt->execute();
    $result = $stmt->fetch();
    $nbProducts = (int) $result['nb_products'];
    $parPage = 15;
    $pages = ceil($nbProducts / $parPage);
    $premier = ($currentPage * $parPage) - $parPage;
    $stmt = dbConnect()->prepare('SELECT*FROM categories as c INNER JOIN sub_categories as sc ON c.id = sc.id_categorie INNER JOIN products as p ON sc.id = p.id_sub_categories INNER JOIN illustrate_products as ip ON p.id = ip.id_products INNER JOIN pictures as pi ON pi.id = ip.id_pictures WHERE c.id = '.$_GET['id'].' LIMIT :premier, :parpage;');
    $stmt->bindValue(':premier', $premier, PDO::PARAM_INT);
    $stmt->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return [$products, $currentPage, $pages];
}
function categorie(){
    $stmt = dbConnect()->prepare('SELECT name_categorie as nc FROM categories WHERE id = '.$_GET['id'].'');
    $stmt->execute();
    $categorie = $stmt->fetch();
    $cat = $categorie['nc'];
    return $cat;
}

function subCategorie(){
    $stmt = dbConnect()->prepare('SELECT sc.id as scid, sc.name_sub_categorie as nsc FROM sub_categories as sc INNER JOIN categories as c ON c.id = sc.id_categorie WHERE c.id = '.$_GET['id'].'');
    $stmt->execute();
    $subCats = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $subCats; 
}

function newProducts() {
        $stmt = dbConnect()->prepare("SELECT*FROM categories as c INNER JOIN sub_categories as sc ON c.id = sc.id_categorie INNER JOIN products as p ON sc.id = p.id_sub_categories INNER JOIN illustrate_products as ip ON p.id = ip.id_products INNER JOIN pictures as pi ON pi.id = ip.id_pictures  WHERE c.id = ".$_GET['id']." ORDER BY date_ajout ASC LIMIT 10 ");
        $stmt->execute();
        $newProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $newProducts;
}


