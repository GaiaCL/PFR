<?php $title = "Ajout Catégorie"; ?>
<?php  ob_start();?>
    <h1 style="box-shadow:none;">Ajouter une Catégorie</h1>
    <form method="POST" action="">
        <?= $msg?>
        <label>Nom de la Catégorie : </label><input type="text" name="nom">
        <label>Description de la Catégorie : </label><textarea name="description"></textarea>
        <input type="submit" name="valider" value="Ajouter">
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>
    </form> 