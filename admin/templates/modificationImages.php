<?php require('../src/model/modImgVerif.php'); ?>
<h1>Modification des définitions</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <img src="<?= $pathPics?>">
        <label>Nom de l'image : </label><input type="text" name="namePics" value ="<?= $namePics ?>">
        <label>Chemin de l'image : </label><input type="text" name="pathPics" value ="<?= $pathPics ?>">
        <label>Description de l'image : </label><input type="text" name="descriptionPics" value ="<?= $descriptionPics ?>">
        <input type="submit" id="valide" name="valider">
    </form>