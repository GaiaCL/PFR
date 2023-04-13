<?php $title = 'Gestion des Specs';?>
<?php ob_start();?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des <?= $nameSpec; ?></h1>
    <table class="table text-center">
    <thead>
        <tr>
            <th scope="col">Type</th>
            <th scope="col">Disponibilité</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
foreach($specs as $spec) {
    ?>
            <tr>
                <?php if($_GET['page'] == 'manageSpecsColors'){?>
            <td><?= $spec['type_colors'] ?></td>
            <?php } else {?>
                <td><?= $spec['type_size'] ?></td>
                <?php }?>
            <td><?php if($spec['is_enabled'] == 1){
                            echo "Disponible";
                        } 
                        else {
                            echo "Indisponible";
                        }?></td>             
            <td class="d-flex justify-content-center">  
                <div class="me-2"><a href="index.php?page=modificationSpecs<?= $name; ?>&id=<?php echo $spec['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Modifier</a></div>
                <div><a href="index.php?page=manageSpecs<?= $name; ?>&id= <?php echo $spec['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Supprimer</a></div>
            </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>