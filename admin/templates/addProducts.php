<?php $title = 'Ajout Produits';
ob_start();
?>
    <h1 style="box-shadow: none;margin-top:2em;">Ajouter un Produit</h1>
    <form method="POST" action="">
        <?= $msg?>
        <label>Nom du Produit : </label><input type="text" name="nameProducts">
        <label class="mb-4">Description du produit : </label><textarea name="descProducts" style="width:30em; height:10em;"></textarea>
        <label class="mt-4">Prix du Produit : </label><input type=number min=0 max=any step=0.01 name="priceProducts">
        <select class="form-select m-4" name="subCategorie">
                    <option selected ="true" disabled ='disabled'>Choisissez la Sous-Catégorie</option>
                    <?php
                    foreach($SCs as $SC){
                        echo "<option name='subCategorie' value = ".$SC['id'].'>'.$SC['name_sub_categorie'] ."</option>" ;
                    }
                    ?>
                    </select>
                    
                    <label class="mb-2">Couleurs : </label>
                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <?php
                    foreach($colors as $color){
                        echo "<div class='d-flex flex-column flex-wrap align-items-center justify-content-center p-2 m-1' style='border:solid 1px;background-color: ".$color['type_colors'].";color:#9fa2a6;'><input type='checkbox' value=".$color['id']." name ='checkboxColor[]' >".$color['type_colors']."</input></div>" ;
                    }
                    ?>
                    </div>
                    <label class="mt-2">Tailles : </label>
                    <div class="d-flex align-items-center">
                    <?php
                    foreach($sizes as $size){
                        echo "<input type='checkbox' value=".$size['id']." name ='checkboxSize[]'>".$size['type_size']."</input>" ;
                    }
                    ?>
                    </div>
                    <label class="mt-2">Disponibilité : </label><input type="checkbox" name="isEnabled">
        <input type="submit" name="valider" value="Ajouter">
    </form> 
    <?php $content = ob_get_clean();
    require('layoutAdmin.php');
    ?>