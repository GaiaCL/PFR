<?php require('../src/model/modSubCatVerif.php');?>
<h1>Modification des Sous-Catégories</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Nom de la Sous-Catégorie : </label><input type="text" name="nameSubCat" value ="<?= $nameSubCat ?>">
        <label class="mb-4">Description de la Sous-Catégorie : </label><textarea name="descSubCat" style="width:30em; height:10em;"><?= $descriptionSubCat ?></textarea>
        <select class="form-select m-4" name="categories">
                    <option selected ="true" disabled ='disabled'>Choisissez la Catégorie</option>
                    <?php
                    foreach($SCs as $SC){
                        echo "<option name='optionSC' value = ".$SC['id'].'>'.$SC['name'] ."</option>" ;
                    }
                    ?>
                    </select>
                    <input type="submit" id="valide" name="valider">
    </form>