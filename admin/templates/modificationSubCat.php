<?php $title = "Modification Sub-Categories";?>
<?php ob_start(); ?>
<h1>Modification des Sous-Catégories</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Nom de la Sous-Catégorie : </label><input type="text" name="nameSubCat" value ="<?= $firstMod ?>">
        <label class="mb-4">Description de la Sous-Catégorie : </label><textarea name="descSubCat" style="width:30em; height:10em;"><?= $secondMod ?></textarea>
        <select class="form-select m-4" name="categories">
                    <option selected ="true" disabled ='disabled'>Choisissez la Catégorie</option>
                    <?php
                    foreach($SCs as $SC){
                        echo "<option name='optionSC' value = ".$SC['id'].'>'.$SC['name_categorie'] ."</option>" ;
                    }
                    ?>
                    </select>
                    <input type="submit" id="valide" name="valider">
    </form>
<?php $content = ob_get_clean();
require('layoutAdmin.php');?>