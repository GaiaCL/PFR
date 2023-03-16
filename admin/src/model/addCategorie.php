<?php 
function insertCategorie() {
$stmt="";
if (isset($_POST['nom'],$_POST['description'])) {
    $name = stripslashes($_POST['nom']);
    $description = stripslashes($_POST['description']);
    $query = "INSERT into `categories` (name_categorie, description)
          VALUES (:name_categorie, :description)";
    // Exécuter la stmtuête sur la base de données
    $stmt = dbConnect()->prepare($query);
    $stmt->bindValue(':name_categorie', $name, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    $stmt->execute();
    $msg= "Catégorie ajoutée avec succès !";
}
else if (!isset($_POST['nom']) || !isset($_POST['nom'])) {
    $msg= "";
}
return $msg;
}
