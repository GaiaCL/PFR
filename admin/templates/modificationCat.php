<?php $title = "Modification Catégorie"?>
<?php ob_start(); ?>
<h1>Modification des Catégories</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Nom de la Catégorie : </label><input type="text" name="nomCat" value ="<?= $firstMod?>">
        <label>Description de la Catégorie : </label><textarea name="descCat"><?= $secondMod ?></textarea>
        <input type="submit" id="valide" name="valider">
    </form>
<?php $content = ob_get_clean();
require('layoutAdmin.php'); ?>