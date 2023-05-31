<?php 

session_start();

require_once('../../db/database.php');

$resultat=0;

$sql = 'SELECT*FROM cart WHERE ident_customer= :ident_customer ';
$query = dbConnect()->prepare($sql);
$query->bindValue(':ident_customer', $_SESSION['ident_customer'], PDO::PARAM_INT);
$query->execute();
$carts = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($carts as $cart){
    $resultat+=$cart['quantity'];
}
if($resultat>0){
    $response = array("totalQuantity" => $resultat);
    echo  json_encode($response);

} 
 else {

  echo "0 résultats";
}