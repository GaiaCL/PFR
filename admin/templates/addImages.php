<?php require('../src/model/addImgVerif.php'); ?>
<h1 style="box-shadow:none;">Saisie des Images</h1>
    <form method="POST" action="#" enctype="multipart/form-data">
        <?= $msgSend ?>
        <input type="file" name="image">
        <label>Description de l'image :</label><textarea name="description" style="width:30em; height:10em;"></textarea>
        <input type="submit" name="envoyer">
    </form>