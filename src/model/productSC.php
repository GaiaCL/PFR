<?php 

function getSubCategorieProducts(){
    if(!isset($_GET['orderby'])) {
        $statement = 'SELECT*FROM categories as c 
        INNER JOIN sub_categories as sc ON c.id = sc.id_categorie 
        INNER JOIN products as p ON sc.id = p.id_sub_categories 
        INNER JOIN illustrate_products as ip ON p.id = ip.id_products 
        INNER JOIN pictures as pi ON pi.id = ip.id_pictures 
        WHERE sc.id = '.$_GET['id'].' LIMIT :premier, :parpage;';
    }
    else if(isset($_GET['orderby'])) {
        $orderBy = $_GET['orderby'];
        if($orderBy == 'AZ'){
            $statement = 'SELECT*FROM categories as c 
            INNER JOIN sub_categories as sc ON c.id = sc.id_categorie 
            INNER JOIN products as p ON sc.id = p.id_sub_categories 
            INNER JOIN illustrate_products as ip ON p.id = ip.id_products 
            INNER JOIN pictures as pi ON pi.id = ip.id_pictures 
            WHERE sc.id = '.$_GET['id'].' ORDER BY name_products ASC LIMIT :premier, :parpage;';
        }
        else if($orderBy == 'ZA'){
            $statement = 'SELECT*FROM categories as c 
            INNER JOIN sub_categories as sc ON c.id = sc.id_categorie 
            INNER JOIN products as p ON sc.id = p.id_sub_categories 
            INNER JOIN illustrate_products as ip ON p.id = ip.id_products 
            INNER JOIN pictures as pi ON pi.id = ip.id_pictures 
            WHERE sc.id = '.$_GET['id'].' ORDER BY name_products DESC LIMIT :premier, :parpage;';
        }
        else if($orderBy == 'LH'){
            $statement = 'SELECT*FROM categories as c 
            INNER JOIN sub_categories as sc ON c.id = sc.id_categorie 
            INNER JOIN products as p ON sc.id = p.id_sub_categories 
            INNER JOIN illustrate_products as ip ON p.id = ip.id_products 
            INNER JOIN pictures as pi ON pi.id = ip.id_pictures 
            WHERE sc.id = '.$_GET['id'].' ORDER BY price ASC LIMIT :premier, :parpage;';
        }
        else if($orderBy == 'HL'){
            $statement = 'SELECT*FROM categories as c 
            INNER JOIN sub_categories as sc ON c.id = sc.id_categorie 
            INNER JOIN products as p ON sc.id = p.id_sub_categories 
            INNER JOIN illustrate_products as ip ON p.id = ip.id_products 
            INNER JOIN pictures as pi ON pi.id = ip.id_pictures 
            WHERE sc.id = '.$_GET['id'].' ORDER BY price DESC LIMIT :premier, :parpage;';
        }
        
    }

    if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
        $currentPage = (int) strip_tags($_GET['pagenb']);
    }else{
        $currentPage = 1;
    }
    $stmt = dbConnect()->prepare('SELECT COUNT(*) AS nb_products FROM `products` WHERE id_sub_categories = '.$_GET['id'].'');
    $stmt->execute();
    $result = $stmt->fetch();
    $nbProducts = (int) $result['nb_products'];
    $parPage = 20;
    $pages = ceil($nbProducts / $parPage);
    $premier = ($currentPage * $parPage) - $parPage;
    $stmt = dbConnect()->prepare($statement);
    $stmt->bindValue(':premier', $premier, PDO::PARAM_INT);
    $stmt->bindValue(':parpage', $parPage, PDO::PARAM_INT);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return [$products, $currentPage, $pages];
}

function subCategorie(){
    $stmt = dbConnect()->prepare('SELECT name_sub_categorie as nsc, description as dp FROM sub_categories WHERE id = '.$_GET['id'].'');
    $stmt->execute();
    $subCategorie = $stmt->fetch();
    $subCat = $subCategorie['nsc'];
    $desc = $subCategorie['dp'];
    return [$subCat, $desc];
}