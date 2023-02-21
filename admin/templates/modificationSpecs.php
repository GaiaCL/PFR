<?php $title ="Modification Specs";
ob_start();?>
<h1>Modification des Specifications</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Type de la specs : </label><input type="text" name="type" value ="<?= $typeSpecs ?>">
        <?php if ($isEnabled == true){
                    echo '<label class="mt-2">Disponibilité : </label><input type="checkbox" name="isEnabled" checked>';
                    }else if ($isEnabled == false) {
                    echo '<label class="mt-2">Disponibilité : </label><input type="checkbox" name="isEnabled">';
                    }?>
                    <input type="submit" id="valide" name="valider">
    </form>
    <?php $content = ob_get_clean();
    require('layoutAdmin.php');?>