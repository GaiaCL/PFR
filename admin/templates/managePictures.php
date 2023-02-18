<?php $title = 'Gestion Images';?>
<?php ob_start(); ?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Images</h1>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($pictures as $picture){
            ?>
            <tr>
            <td><?= $picture['name'] ?></td>
            <td><?= $picture['description'] ?></td>
            <td><?= "<img src=".$picture['path']." style='width:300px;'>" ?></td>                
            <td id="modif">  <div id="modif1"><a href="index.php?page=modificationPictures&id=<?php echo $picture['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Modifier</a>  
            <a href="index.php?page=managePictures&id= <?php echo $picture['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Supprimer</a><div></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php $content = ob_get_clean(); 
require('layoutAdmin.php');
?>