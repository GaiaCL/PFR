<?php
function selectModifCat(){
if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT*FROM categories WHERE id = :id";
    $stmt = dbConnect()->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $res = $stmt->fetchAll();
    if (isset($_POST['nomCat']) && isset($_POST['descCat'])) {
        $nomUpdate = strip_tags($_POST['nomCat']);
        $descriptionUpdate = strip_tags($_POST['descCat']); 
        if(isset($_POST['valider'])){
            $query = 'UPDATE categories SET name_categorie = :name_categorie, description = :description WHERE id = :id';
            $stmt = dbConnect()->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
            $stmt->bindValue(':name_categorie', $nomUpdate, PDO::PARAM_STR);
            $stmt->bindValue(':description', $descriptionUpdate, PDO::PARAM_STR);
            $stmt->execute();
            header("location:index.php?page=manageCat");
        }
    }
}
return $res;
}