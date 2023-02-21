<?php $title ="Modification Specs";
ob_start();?>
<h1>Modification des Specifications</h1>
    <form method = "post" action ="#" enctype="multipart/form-data">
        <label>Type de la specs : </label><input type="text" name="type" value ="<?= $typeSpecs ?>">
        <label >Disponibilité : </label>
            <select name="dispo"> 
                <option>1</option>
                <option>0</option>
            </select>
                    <input type="submit" id="valide" name="valider">
    </form>
    <?php $content = ob_get_clean();
    require('layoutAdmin.php');?>