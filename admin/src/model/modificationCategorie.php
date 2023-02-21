<?php
function selectModifCat(){
if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT*FROM categories WHERE id = :id";
    $idsStatement = dbConnect()->prepare($sql);
    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
    $idsStatement->execute();
    $res = $idsStatement->fetch();
    $nomCat = $res['name'];
    $descriptionCat = $res['description'];
    if (isset($_POST['nomCat']) && isset($_POST['descCat'])) {
        $nomUpdate = $_POST['nomCat'];
        $descriptionUpdate = $_POST['descCat']; 
        if(isset($_POST['valider'])){
            $query = 'UPDATE categories SET name = :name, description = :description WHERE id = :id';
            $idsStatement = dbConnect()->prepare($query);
            $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
            $idsStatement->bindValue(':name', $nomUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':description', $descriptionUpdate, PDO::PARAM_STR);
            $idsStatement->execute();
            header("location:index.php?page=manageCat");
        }
    }
}
return [$nomCat,$descriptionCat];
}