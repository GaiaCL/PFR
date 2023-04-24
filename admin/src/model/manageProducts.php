<?php
function deleteProducts(){
if(isset($_GET['id'])){
    $catID = $_GET['id'];
    $stmtDelete = 'DELETE FROM `products` WHERE id = :id';
    $adminDelete = dbConnect()->prepare($stmtDelete);
    $adminDelete->bindValue(':id', $catID, PDO::PARAM_INT);
    $adminDelete ->execute();
 }}

 function requestProductsManagement() {
   if(isset($_GET['pagenb']) && !empty($_GET['pagenb'])){
      $currentPage = (int) strip_tags($_GET['pagenb']);
  }else{
      $currentPage = 1;
  }
  $sql = 'SELECT COUNT(*) AS nb_products FROM `products`;';
  $query = dbConnect()->prepare($sql);
  $query->execute();
  $result = $query->fetch();
  $nbProducts = (int) $result['nb_products'];
  $parPage = 6;
  $pages = ceil($nbProducts / $parPage);
  $premier = ($currentPage * $parPage) - $parPage;
  $sql = 'SELECT p.id_sub_categories, p.id, p.name_products, p.description, p.price, p.date_ajout, p.is_enabled, sc.name_sub_categorie as nameSubCat 
  FROM `products` as p INNER JOIN sub_categories as sc ON p.id_sub_categories = sc.id LIMIT :premier, :parpage;';
  $query = dbConnect()->prepare($sql);
  $query->bindValue(':premier', $premier, PDO::PARAM_INT);
  $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
  $query->execute();
  $products = $query->fetchAll(PDO::FETCH_ASSOC);
    return [$products, $currentPage, $pages];
    }
    
    function stocks() {
      $tabProducts = requestProductsManagement();
      $products = $tabProducts[0];
      foreach ($products as $product){
        $enable = $product['is_enabled'];
      if( $enable == 1 ){
        $stock = "Disponible";
        return $stock;
      }
      else {
        $stock = "Indisponible";
        return $stock;
      }
    }
    }