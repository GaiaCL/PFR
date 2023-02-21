<?php
function selectModifPictures() {
if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT*FROM pictures WHERE id = :id";
    $idsStatement = dbConnect()->prepare($sql);
    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
    $idsStatement->execute();
    $res = $idsStatement->fetch();
    $namePics = $res['name'];
    $pathPics = $res['path'];
    $descriptionPics = $res['description'];
    if (isset($_POST['namePics']) && isset($_POST['pathPics']) && isset($_POST['descriptionPics'])) {
        $namePicsUpdate = strip_tags($_POST['namePics']);
        $pathPicsUpdate = strip_tags($_POST['pathPics']);  
        $descriptionPicsUpdate = strip_tags($_POST['descriptionPics']);
        if(isset($_POST['valider'])){
            $query = 'UPDATE pictures SET name = :name, path = :path, description = :description WHERE id = :id';
            $idsStatement = dbConnect()->prepare($query);
            $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
            $idsStatement->bindValue(':name', $namePicsUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':path', $pathPicsUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':description', $descriptionPicsUpdate, PDO::PARAM_STR);
            $idsStatement->execute();
            header("location:index.php?page=managePictures");
        }
    }
}
return [$namePics, $pathPics, $descriptionPics];
}    