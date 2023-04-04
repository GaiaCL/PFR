<?php $title = "Modification Produits";
ob_start(); ?>
<h1>Modification des Produits</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Nom du Produit : </label><input type="text" name="nameProducts" value ="<?= $firstMod ?>">
        <label class="mb-4">Description du Produit : </label><textarea name="descProducts" style="width:30em; height:10em;"><?= $secondMod ?></textarea>
        <label>Prix du Produit : </label><input type=number min=0 max=any step=0.01 name="priceProducts" value ="<?= $thirdMod ?>">
        <select class="form-select m-4" name="subCategories">
                    <?php
                    foreach($SCs as $SC){
                        if($fifthMod == $SC['name_sub_categorie']){
                          echo  "<option selected ='true'>$fifthMod</option>";
                        } else {
                        echo "<option name='optionSC' value = ".$SC['id'].'>'.$SC['name_sub_categorie'] ."</option>" ;
                        }
                        
                    }
                    ?>
                    </select>
                    <?php if ($fourthMod == true){
                    echo '<label class="mt-2">Disponibilité : </label><input type="checkbox" name="isEnabled" checked>';
                    }else if ($fourthMod == false) {
                    echo '<label class="mt-2">Disponibilité : </label><input type="checkbox" name="isEnabled">';
                    }?>
                    <input type="submit" id="valide" name="valider">
    </form>
    <?php $content = ob_get_clean();
    require('layoutAdmin.php');?>