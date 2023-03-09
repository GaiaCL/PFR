<?php $title ="Modification Images";?>
<?php ob_start();?>
<h1>Modification des définitions</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <img src="../<?= $secondMod?>">
        <label>Nom de l'image : </label><input type="text" name="namePics" value ="<?= $firstMod ?>">
        <label>Chemin de l'image : </label><input type="text" name="pathPics" value ="<?= $secondMod ?>">
        <label>Description de l'image : </label><input type="text" name="descriptionPics" value ="<?= $thirdMod ?>">
        <input type="submit" id="valide" name="valider">
    </form>
<?php $content = ob_get_clean();
require('layoutAdmin.php');?>