<?php 
function selectModifColors(){
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
                        header("location:index.php?page=manageSpecsColors");
                    }
                }
            }
            return $typeSpecs;
}

function selectModifSizes(){
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
                        header("location:index.php?page=manageSpecsSizes");
                    }
                }
            }
            return $typeSpecs;
}
    