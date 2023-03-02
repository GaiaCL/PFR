<?php $title ='Ajout Images' ?>
<?php ob_start();?>
<h1 style="box-shadow: none;margin-top:2em;">Saisie des Images</h1>
    <form method="POST" action="#" enctype="multipart/form-data">
        <?= $msgSend ?>
        <input type="file" name="image">
        <label>Description de l'image :</label><textarea name="description" style="width:30em; height:10em;"></textarea>
        <select class="form-select m-4" name="Prod">
                    <option selected ="true" disabled ='disabled'>Choisissez le produit</option>
                    <?php
                    foreach($products as $product){
                        echo "<option value = ".$product['id'].'>'.$product['name'] ."</option>" ;
                    }
                    ?>
        </select>
        <input type="submit" name="envoyer" value="Ajouter">
    </form>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>