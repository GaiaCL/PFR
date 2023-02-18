<?php 
    if(isset($_GET['type']))
    {
        $type = strval($_GET['type']);
        if ( $action == 'modificationSpecs' && $type == 'color'){

            if (isset($_GET['id'])){
                $id = intval($_GET['id']);
                $sql = "SELECT*FROM colors WHERE id = :id";
                $idsStatement = dbConnect()->prepare($sql);
                $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                $idsStatement->execute();
                $res = $idsStatement->fetch();
                $typeSpecs = $res['type'];
                if (isset($_POST['type']) && isset($_POST['dispo'])) {
                    $typeUpdate = strip_tags($_POST['type']);
                    $dispoUpdate = strip_tags($_POST['dispo']);
                    if(isset($_POST['valider'])){
                        $query = 'UPDATE colors SET type = :type, is_enabled = :is_enabled WHERE id = :id';
                        $idsStatement = dbConnect()->prepare($query);
                        $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
                        $idsStatement->bindValue(':type', $typeUpdate, PDO::PARAM_STR);
                        $idsStatement->bindValue(':is_enabled', $dispoUpdate, PDO::PARAM_STR);
                        $idsStatement->execute();
                        header("location:index.php?action=specsColors");
                    }
                }
            }
        }
        else if ($action == 'modificationSpecs'  && $type == 'size'){
            if (isset($_GET['id'])){
                $id = intval($_GET['id']);
                $sql = "SELECT*FROM size WHERE id = :id";
                $idsStatement = dbConnect()->prepare($sql);
                $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                $idsStatement->execute();
                $res = $idsStatement->fetch();
                $typeSpecs = $res['type'];
                if (isset($_POST['type']) && isset($_POST['dispo'])) {
                    $typeUpdate = strip_tags($_POST['type']);
                    $dispoUpdate = strip_tags($_POST['dispo']);
                    if(isset($_POST['valider'])){
                        $query = 'UPDATE size SET type = :type, is_enabled = :is_enabled  WHERE id = :id';
                        $idsStatement = dbConnect()->prepare($query);
                        $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
                        $idsStatement->bindValue(':type', $typeUpdate, PDO::PARAM_STR);
                        $idsStatement->bindValue(':is_enabled', $dispoUpdate, PDO::PARAM_STR);
                        $idsStatement->execute();
                        header("location:index.php?action=specsSizes");
                    }
                }
            }

        }
    }