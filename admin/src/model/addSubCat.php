<?php 
function selectCat(){
$sqlQuery = 'SELECT * FROM `categories`';
$SCStatement = dbConnect()->prepare($sqlQuery);
$SCStatement->execute();
$SCs = $SCStatement->fetchAll();
return $SCs;
}
function insertSubCategorie(){
$stmt="";
if (isset($_POST['nom'],$_POST['description'], $_POST['categorie'])) {
    $name = stripslashes($_POST['nom']);
    $description = stripslashes($_POST['description']);
    $idCat = strip_tags($_POST['categorie']);
    $query = "INSERT into `sub_categories` (name_sub_categorie, description, id_categorie)
          VALUES (:name_sub_categorie, :description, :id_categorie)";
    // Exécuter la stmtuête sur la base de données
    $stmt = dbConnect()->prepare($query);
    $stmt->bindValue(':name_sub_categorie', $name, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    $stmt->bindValue(':id_categorie', $idCat, PDO::PARAM_INT);
    $stmt->execute();
    $msg= "Sous-Catégorie ajoutée avec succès !";
}
else if (!isset($_POST['nom']) || !isset($_POST['description']) || !isset($_POST['categorie']) ) {
    $msg= "";
}
return $msg;
}
