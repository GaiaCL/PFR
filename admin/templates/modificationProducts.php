<?php require('../src/model/modProduitVerif.php');?>
<h1>Modification des Produits</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Nom du Produit : </label><input type="text" name="nameProducts" value ="<?= $nameProducts ?>">
        <label class="mb-4">Description du Produit : </label><textarea name="descProducts" style="width:30em; height:10em;"><?= $descriptionProducts ?></textarea>
        <label>Prix du Produit : </label><input type=number min=0 max=any step=0.01 name="priceProducts" value ="<?= $priceProducts ?>">
        <select class="form-select m-4" name="subCategories">
                    <option selected ="true" disabled ='disabled'>Choisissez la Sous-Catégorie</option>
                    <?php
                    foreach($SCs as $SC){
                        echo "<option name='optionSC' value = ".$SC['id'].'>'.$SC['name'] ."</option>" ;
                    }
                    ?>
                    </select>
                    <input type="submit" id="valide" name="valider">
    </form>