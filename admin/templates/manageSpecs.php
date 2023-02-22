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
        foreach($specs as $spec){
            ?>
            <tr>
            <td><?= $spec['type'] ?></td>
            <td><?php if($spec['is_enabled'] == 1){
                            echo "Disponible";
                        } 
                        else {
                            echo "Indisponible";
                        }?></td>             
            <td id="modif">  <div id="modif1"><a href="index.php?page=modificationSpecs<?= $name; ?>&id=<?php echo $spec['id']?>" style="background-spec:black;padding:0.3em;spec:white;border-radius:1em;">Modifier</a>  
            <a href="index.php?page=manageSpecs<?= $name; ?>&id= <?php echo $spec['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-spec:black;padding:0.3em;spec:white;border-radius:1em;">Supprimer</a><div></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>