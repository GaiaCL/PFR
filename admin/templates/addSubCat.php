<?php
require('../src/model/addSubCatVerif.php');
?>
    <h1 style="box-shadow:none;">Ajouter une Sous-Catégorie</h1>
    <form method="POST" action="">
        <?= $msg?>
        <label>Nom de la Sous-Catégorie : </label><input type="text" name="nom">
        <label class="mb-4">Description de la Sous-Catégorie : </label><textarea name="description" style="width:30em; height:10em;"></textarea>
        <select class="form-select m-4" name="categorie">
                    <option selected ="true" disabled ='disabled'>Choisissez la Catégorie</option>
                    <?php
                    foreach($SCs as $SC){
                        echo "<option name='categorie' value = ".$SC['id'].'>'.$SC['name'] ."</option>" ;
                    }
                    ?>
                    </select>
        <input type="submit" name="valider">
    </form> 