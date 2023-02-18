<?php 
        function insertColors(){
        $req="";
        if (isset($_POST['type'])) {
            $typ = stripslashes($_POST['type']);
            $query = "INSERT into `colors` (type)
                VALUES (:type)";
            // Exécuter la requête sur la base de données
            $req = dbConnect()->prepare($query);
            $req->bindValue(':type', $typ, PDO::PARAM_STR);
            $req->execute();
            $msg= "Couleur ajoutée avec succès !";
        }
        else if (!isset($_POST['type'])) {
            $msg= "";
        }
        return $msg;
    }
    function insertSizes(){
        $req="";
        if (isset($_POST['type'])) {
            $typ = stripslashes($_POST['type']);
            $query = "INSERT into `size` (type)
                VALUES (:type)";
            // Exécuter la requête sur la base de données
            $req = dbConnect()->prepare($query);
            $req->bindValue(':type', $typ, PDO::PARAM_STR);
            $req->execute();
            $msg= "Taille ajoutée avec succès !";
        }
        else if (!isset($_POST['type'])) {
            $msg= "";
        }
        return $msg;
    }
