<?php require('../src/model/modCatVerif.php');?>
<h1>Modification des Catégories</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Nom de la Catégorie : </label><input type="text" name="nomCat" value ="<?= $nomCat ?>">
        <label>Description de la Catégorie : </label><textarea name="descCat"><?= $descriptionCat ?></textarea>
        <input type="submit" id="valide" name="valider">
    </form>