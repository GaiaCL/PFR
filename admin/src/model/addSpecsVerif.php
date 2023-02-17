<?php 
if(isset($_GET['type'])) {
    $types = strval($_GET['type']);
    
    if($types == 'colors'){
        $catSpecs = "Couleurs";
        $sqlQuery = 'SELECT * FROM `colors`';
        $SCStatement = $db->prepare($sqlQuery);
        $SCStatement->execute();
        $SCs = $SCStatement->fetchAll();

        $req="";
        if (isset($_POST['type'])) {
            $typ = stripslashes($_POST['type']);
            $query = "INSERT into `colors` (type)
                VALUES (:type)";
            // Exécuter la requête sur la base de données
            $req = $db->prepare($query);
            $req->bindValue(':type', $typ, PDO::PARAM_STR);
            $req->execute();
            $msg= "Couleur ajoutée avec succès !";
        }
        else if (!isset($_POST['type'])) {
            $msg= "";
        }
    }
    else if($types == 'sizes'){
        $catSpecs = "Tailles";
        $sqlQuery = 'SELECT * FROM `size`';
        $SCStatement = $db->prepare($sqlQuery);
        $SCStatement->execute();
        $SCs = $SCStatement->fetchAll();

        $req="";
        if (isset($_POST['type'])) {
            $typ = stripslashes($_POST['type']);
            $query = "INSERT into `size` (type)
                VALUES (:type)";
            // Exécuter la requête sur la base de données
            $req = $db->prepare($query);
            $req->bindValue(':type', $typ, PDO::PARAM_STR);
            $req->execute();
            $msg= "Taille ajoutée avec succès !";
        }
        else if (!isset($_POST['type'])) {
            $msg= "";
        }
    }
}