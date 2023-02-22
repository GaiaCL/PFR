<?php 
        function insertColors(){
        $req="";
        if (isset($_POST['type'])) {
            $typ = stripslashes($_POST['type']);
            if (isset($_POST['isEnabled'])){
            $isEnabled = true;
            }
            else if (!isset($_POST['isEnabled'])){
                $isEnabled = false;
            }
            $query = "INSERT into `colors` (type, is_enabled)
                VALUES (:type, :is_enabled)";
            // Exécuter la requête sur la base de données
            $req = dbConnect()->prepare($query);
            $req->bindValue(':type', $typ, PDO::PARAM_STR);
            $req->bindValue(':is_enabled', $isEnabled, PDO::PARAM_BOOL);
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
            if (isset($_POST['isEnabled'])){
                $isEnabled = true;
                }
                else if (!isset($_POST['isEnabled'])){
                    $isEnabled = false;
                }
            $query = "INSERT into `size` (type, is_enabled)
                VALUES (:type, :is_enabled)";
            // Exécuter la requête sur la base de données
            $req = dbConnect()->prepare($query);
            $req->bindValue(':type', "$typ", PDO::PARAM_STR);
            $req->bindValue(':is_enabled', $isEnabled, PDO::PARAM_BOOL);
            $req->execute();
            $msg= "Taille ajoutée avec succès !";
        }
        else if (!isset($_POST['type'])) {
            $msg= "";
        }
        return $msg;
    }
