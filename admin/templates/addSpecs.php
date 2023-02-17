<?php require('../src/model/addSpecsVerif.php') ?>

<h1>Ajout des <?= $catSpecs ?></h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Type de la specs : </label><input type="text" name="type">
                    <input type="submit" id="valide" name="valider">
    </form>