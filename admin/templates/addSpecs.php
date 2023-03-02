<?php $title = "Ajout Specs"; ?>
<?php ob_start();?>
<h1 style="box-shadow: none;margin-top:2em;">Ajout des <?= $nameSpec ?></h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
    <?= $msg ?>
        <label>Type de la specs : </label><input type="text" name="type">
        <label class="mt-2">Disponibilité : </label><input type="checkbox" name="isEnabled">
                    <input type="submit" id="valide" name="valider" value="Ajouter">
    </form>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>