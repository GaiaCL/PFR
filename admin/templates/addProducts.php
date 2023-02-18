<?php $title = 'Ajout Produits';
ob_start();
?>
    <h1 style="box-shadow:none;">Ajouter un Produit</h1>
    <form method="POST" action="">
        <?= $msg?>
        <label>Nom du Produit : </label><input type="text" name="nameProducts">
        <label class="mb-4">Description du produit : </label><textarea name="descProducts" style="width:30em; height:10em;"></textarea>
        <label class="mt-4">Prix du Produit : </label><input type=number min=0 max=any step=0.01 name="priceProducts">
        <select class="form-select m-4" name="subCategorie">
                    <option selected ="true" disabled ='disabled'>Choisissez la Sous-Catégorie</option>
                    <?php
                    foreach($SCs as $SC){
                        echo "<option name='subCategorie' value = ".$SC['id'].'>'.$SC['name'] ."</option>" ;
                    }
                    ?>
                    </select>
        <input type="submit" name="valider">
    </form> 
    <?php $content = ob_get_clean();
    require('layoutAdmin.php');
    ?>