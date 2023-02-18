<?php 
$req="";
if (isset($_POST['nom'],$_POST['description'])) {
    $name = stripslashes($_POST['nom']);
    $description = stripslashes($_POST['description']);
    $query = "INSERT into `categories` (name, description)
          VALUES (:name, :description)";
    // Exécuter la requête sur la base de données
    $req = dbConnect()->prepare($query);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->execute();
    $msg= "Catégorie ajoutée avec succès !";
}
else if (!isset($_POST['nom']) || !isset($_POST['nom'])) {
    $msg= "";
}

