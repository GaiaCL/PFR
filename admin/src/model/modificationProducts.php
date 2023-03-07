<?php
function selectSubCat(){
$sqlQuerySC = 'SELECT * FROM `sub_categories`';
$SCStatement = dbConnect()->prepare($sqlQuerySC);
$SCStatement->execute();
$SCs = $SCStatement->fetchAll();
return $SCs;
}

function selectModifProducts() {
if (isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT*FROM products WHERE id = :id";
    $idsStatement = dbConnect()->prepare($sql);
    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
    $idsStatement->execute();
    $res = $idsStatement->fetch();
    $nameProducts = $res['name'];
    $descriptionProducts = $res['description'];
    $priceProducts = $res['price'];
    $isEnabled = boolval($res['is_enabled']);
    if (isset($_POST['nameProducts']) && isset($_POST['descProducts']) && isset($_POST['priceProducts']) && isset($_POST['subCategories'])) {
        $nameProductsUpdate = strip_tags($_POST['nameProducts']);
        $descriptionProductsUpdate = strip_tags($_POST['descProducts']);
        $priceProductsUpdate = strip_tags($_POST['priceProducts']);
        $idSubCatUpdate = strip_tags($_POST['subCategories']);
        $isEnabledUpdate = boolval($_POST['isEnabled']);
        $dateUpdate = CURDATE();
        if(isset($_POST['valider'])){
            $query = 'UPDATE products SET name = :name, description = :description, price = :price, date_ajout = :date_ajout, is_enabled = :is_enabled, id_sub_categories = :id_sub_categories WHERE id = :id';
            $idsStatement = dbConnect()->prepare($query);
            $idsStatement->bindValue(':id', $id, PDO::PARAM_INT); 
            $idsStatement->bindValue(':name', $nameProductsUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':description', $descriptionProductsUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':price', $priceProductsUpdate);
            $idsStatement->bindValue(':date_ajout', $dateUpdate, PDO::PARAM_STR);
            $idsStatement->bindValue(':is_enabled', $isEnabledUpdate, PDO::PARAM_BOOL);
            $idsStatement->bindValue(':id_sub_categories', $idSubCatUpdate, PDO::PARAM_STR);
            $idsStatement->execute();
            
            header("location:index.php?page=manageProducts");
        }
    }
}
return [$nameProducts, $descriptionProducts, $priceProducts,$isEnabled];
}