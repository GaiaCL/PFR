<?php
function selectSubCat(){
$sqlQuery = 'SELECT * FROM `sub_categories`';
$SCStatement = dbConnect()->prepare($sqlQuery);
$SCStatement->execute();
$SCs = $SCStatement->fetchAll();
return $SCs;
}
function insertProducts(){
$stmt="";
if (isset($_POST['nameProducts'],$_POST['descProducts'], $_POST['priceProducts'], $_POST['subCategorie'], $_POST['isEnabled'])) {
    $nameProducts = stripslashes($_POST['nameProducts']);
    $descProducts = stripslashes($_POST['descProducts']);
    $priceProducts = stripslashes($_POST['priceProducts']);
    $isEnabled = boolval($_POST['isEnabled']);
    $identifierProducts = time();
    $idSubCat = strip_tags($_POST['subCategorie']);
    $query = "INSERT into `products` (identifier, name, description,price, id_sub_categories, is_enabled)
          VALUES (:identifier, :name, :description, :price, :id_sub_categories, :is_enabled )";
    $stmt = dbConnect()->prepare($query);
    $stmt->bindValue(':identifier', $identifierProducts, PDO::PARAM_INT);
    $stmt->bindValue(':name', $nameProducts, PDO::PARAM_STR);
    $stmt->bindValue(':description', $descProducts, PDO::PARAM_STR);
    $stmt->bindValue(':price', $priceProducts);
    $stmt->bindValue(':id_sub_categories', $idSubCat, PDO::PARAM_INT);
    $stmt->bindValue(':is_enabled', $isEnabled, PDO::PARAM_BOOL);
    $stmt->execute();
    $msg= "Produit ajouté avec succès !";
}
else if (!isset($_POST['nameProducts']) || !isset($_POST['descProducts']) || !isset($_POST['priceProducts']) || !isset($_POST['subCategorie']) ) {
    $msg= "";
    $identifierProducts="";
}
return [$msg, $identifierProducts];
}

function selectProduct($identifier){
    $query = "SELECT id FROM `products` WHERE identifier = :identifier";
    $stmt = dbConnect()->prepare($query);
    $stmt->bindValue(':identifier', $identifier, PDO::PARAM_INT);
    $stmt->execute();
    $idProduct = $stmt-> fetch();
    return $idProduct[0];   
}
function selectSpecsColors() {
    $query = "SELECT * FROM `colors`";
    $stmt = dbConnect()->prepare($query);
    $stmt->execute();
    $colors = $stmt-> fetchAll();
    return $colors;
}
function selectSpecsSizes() {
    $query = "SELECT * FROM `size`";
    $stmt = dbConnect()->prepare($query);
    $stmt->execute();
    $sizes = $stmt-> fetchAll();
    return $sizes;
}
function insertSpecsTable($idProducts){
    if (isset($_POST['checkboxColor']) && isset($_POST['checkboxSize'])){
        $colorCheck = $_POST['checkboxColor'];
        $sizeCheck = $_POST['checkboxSize'];
        foreach($colorCheck as $color){
            foreach($sizeCheck as $size){     
                $querySec = "INSERT INTO `specs` (id_products, id_colors, id_size)
                VALUES (:id_products, :id_colors, :id_size)";
                $stmts = dbConnect()->prepare($querySec);
                $stmts->bindValue(':id_products', $idProducts, PDO::PARAM_INT);
                $stmts->bindValue(':id_colors', $color, PDO::PARAM_INT);
                $stmts->bindValue(':id_size', $size, PDO::PARAM_INT);
                $stmts->execute();
            }
           
        }
        
    }
}