<?php 
        function insertColors(){
        $stmt="";
        if (isset($_POST['type'])) {
            $typ = stripslashes($_POST['type']);
            if (isset($_POST['isEnabled'])){
            $isEnabled = true;
            }
            else if (!isset($_POST['isEnabled'])){
                $isEnabled = false;
            }
            $query = "INSERT into `colors` (type_colors, is_enabled)
                VALUES (:type_colors, :is_enabled)";
            // Exécuter la stmtuête sur la base de données
            $stmt = dbConnect()->prepare($query);
            $stmt->bindValue(':type_colors', $typ, PDO::PARAM_STR);
            $stmt->bindValue(':is_enabled', $isEnabled, PDO::PARAM_BOOL);
            $stmt->execute();
            $msg= "Couleur ajoutée avec succès !";
        }
        else if (!isset($_POST['type'])) {
            $msg= "";
        }
        return $msg;
    }
    function insertSizes(){
        $stmt="";
        if (isset($_POST['type'])) {
            $typ = stripslashes($_POST['type']);
            if (isset($_POST['isEnabled'])){
                $isEnabled = true;
                }
                else if (!isset($_POST['isEnabled'])){
                    $isEnabled = false;
                }
            $query = "INSERT into `size` (type_size, is_enabled)
                VALUES (:type_size, :is_enabled)";
            // Exécuter la stmtuête sur la base de données
            $stmt = dbConnect()->prepare($query);
            $stmt->bindValue(':type_size', "$typ", PDO::PARAM_STR);
            $stmt->bindValue(':is_enabled', $isEnabled, PDO::PARAM_BOOL);
            $stmt->execute();
            $msg= "Taille ajoutée avec succès !";
        }
        else if (!isset($_POST['type'])) {
            $msg= "";
        }
        return $msg;
    }
