<?php $title = "Ajout Specs"; ?>
<?php ob_start();?>
<h1>Ajout des <?= $nameSpec ?></h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
    <?= $msg ?>
        <label>Type de la specs : </label><input type="text" name="type">
                    <input type="submit" id="valide" name="valider" value="Ajouter">
    </form>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>