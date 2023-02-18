<?php 
$sqlQuery = 'SELECT * FROM `categories`';
$SCStatement = dbConnect()->prepare($sqlQuery);
$SCStatement->execute();
$SCs = $SCStatement->fetchAll();

$req="";
if (isset($_POST['nom'],$_POST['description'], $_POST['categorie'])) {
    $name = stripslashes($_POST['nom']);
    $description = stripslashes($_POST['description']);
    $idCat = strip_tags($_POST['categorie']);
    $query = "INSERT into `sub_categories` (name, description, id_categorie)
          VALUES (:name, :description, :id_categorie)";
    // Exécuter la requête sur la base de données
    $req = dbConnect()->prepare($query);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->bindValue(':id_categorie', $idCat, PDO::PARAM_INT);
    $req->execute();
    $msg= "Sous-Catégorie ajoutée avec succès !";
}
else if (!isset($_POST['nom']) || !isset($_POST['description']) || !isset($_POST['categorie']) ) {
    $msg= "";
}

