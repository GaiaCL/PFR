<?php
require('../src/model/addCatVerif.php');
?>
    <h1 style="box-shadow:none;">Ajouter une Catégorie</h1>
    <form method="POST" action="">
        <?= $msg?>
        <label>Nom de la Catégorie : </label><input type="text" name="nom">
        <label>Description de la Catégorie : </label><textarea name="description"></textarea>
        <input type="submit" name="valider">
    </form> 