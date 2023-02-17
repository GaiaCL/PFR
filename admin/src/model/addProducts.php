<?php 
$sqlQuery = 'SELECT * FROM `sub_categories`';
$SCStatement = $db->prepare($sqlQuery);
$SCStatement->execute();
$SCs = $SCStatement->fetchAll();

$req="";
if (isset($_POST['nameProducts'],$_POST['descProducts'], $_POST['priceProducts'], $_POST['subCategorie'])) {
    $nameProducts = stripslashes($_POST['nameProducts']);
    $descProducts = stripslashes($_POST['descProducts']);
    $priceProducts = stripslashes($_POST['priceProducts']);
    $identifierProducts = time();
    $idSubCat = strip_tags($_POST['subCategorie']);
    $query = "INSERT into `products` (identifier, name, description,price, id_sub_categories)
          VALUES (:identifier, :name, :description, :price, :id_sub_categories)";
    // Exécuter la requête sur la base de données
    $req = $db->prepare($query);
    $req->bindValue(':identifier', $identifierProducts, PDO::PARAM_INT);
    $req->bindValue(':name', $nameProducts, PDO::PARAM_STR);
    $req->bindValue(':description', $descProducts, PDO::PARAM_STR);
    $req->bindValue(':price', $priceProducts);
    $req->bindValue(':id_sub_categories', $idSubCat, PDO::PARAM_INT);
    $req->execute();
    $msg= "Produit ajouté avec succès !";
}
else if (!isset($_POST['nameProducts']) || !isset($_POST['descProducts']) || !isset($_POST['priceProducts']) || !isset($_POST['subCategorie']) ) {
    $msg= "";
}
