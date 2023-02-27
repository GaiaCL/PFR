<?php 
require('../src/db/database.php');
require('../src/model/addPictures.php');
function addPictures(){
   $tab = insertPictures();;
   $msgSend = $tab[0];
   $name = $tab[1];
   $products = selectProducts();
   if (isset($_POST['envoyer'])){
    $id = selectPicture($name);
    insertIllustrateTable($id);
    }
    require('../templates/addPictures.php');
}