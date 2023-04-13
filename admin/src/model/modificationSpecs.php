<?php 
function selectModifColors(){
            if (isset($_GET['id'])){
                $id = intval($_GET['id']);
                $sql = "SELECT*FROM colors WHERE id = :id";
                $idsStatement = dbConnect()->prepare($sql);
                $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                $idsStatement->execute();
                $res = $idsStatement->fetch();
                $typeSpecs = $res['type_colors'];
                $isEnabled = boolval($res['is_enabled']);
                if (isset($_POST['type'])) {
                    $typeUpdate = strip_tags($_POST['type']);
                    $isEnabledUpdate = boolval($_POST['isEnabled']);
                    if(isset($_POST['valider'])){
                        $query = 'UPDATE colors SET type_colors = :type_colors, is_enabled = :is_enabled WHERE id = :id';
                        $idsStatement = dbConnect()->prepare($query);
                        $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
                        $idsStatement->bindValue(':type_colors', $typeUpdate, PDO::PARAM_STR);
                        $idsStatement->bindValue(':is_enabled', $isEnabledUpdate, PDO::PARAM_BOOL);
                        $idsStatement->execute();
                        header("location:index.php?page=manageSpecsColors");
                    }
                }
            }
            return [$typeSpecs, $isEnabled];
}

function selectModifSizes(){
            if (isset($_GET['id'])){
                $id = intval($_GET['id']);
                $sql = "SELECT*FROM size WHERE id = :id";
                $idsStatement = dbConnect()->prepare($sql);
                $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                $idsStatement->execute();
                $res = $idsStatement->fetch();
                $typeSpecs = $res['type_size'];
                $isEnabled = boolval($res['is_enabled']);
                if (isset($_POST['type'])) {
                    $typeUpdate = strip_tags($_POST['type']);
                    $isEnabledUpdate = boolval($_POST['isEnabled']);
                    if(isset($_POST['valider'])){
                        $query = 'UPDATE size SET type_size = :type_size, is_enabled = :is_enabled  WHERE id = :id';
                        $idsStatement = dbConnect()->prepare($query);
                        $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
                        $idsStatement->bindValue(':type_size', $typeUpdate, PDO::PARAM_STR);
                        $idsStatement->bindValue(':is_enabled', $isEnabledUpdate, PDO::PARAM_BOOL);
                        $idsStatement->execute();
                        header("location:index.php?page=manageSpecsSizes");
                    }
                }
            }
            return [$typeSpecs, $isEnabled];
}
    