<?php
function selectCat(){

$sqlQuerySC = 'SELECT * FROM `categories`';
$SCStatement = dbConnect()->prepare($sqlQuerySC);
$SCStatement->execute();
$SCs = $SCStatement->fetchAll();
return $SCs;
}

function selectModifSubCat(){
if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT*FROM sub_categories WHERE id = :id";
    $idsStatement = dbConnect()->prepare($sql);
    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
    $idsStatement->execute();
    $res = $idsStatement->fetch();
    $nameSubCat = $res['name_sub_categorie'];
    $descriptionSubCat = $res['description'];
    if (isset($_POST['nameSubCat']) && isset($_POST['descSubCat']) && isset($_POST['categories'])) {
        $nameUpdate = strip_tags($_POST['nameSubCat']);
        $descriptionUpdate = strip_tags($_POST['descSubCat']);
        $idCatUpdate = strip_tags($_POST['categories']);
        if(isset($_POST['valider'])){
            $query = 'UPDATE sub_categories SET name_sub_categorie = :name_sub_categorie, description = :description, id_categorie = :id_categorie WHERE id = :id';
            $idsStatement = dbConnect()->prepare($query);
            $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
            $idsStatement->bindValue(':name_sub_categorie', $nameUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':description', $descriptionUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':id_categorie', $idCatUpdate, PDO::PARAM_STR);
            $idsStatement->execute();
            header("location:index.php?page=manageSubCat");
        }
    }
}
return [$nameSubCat, $descriptionSubCat];
}