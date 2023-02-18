<?php $title = "Gestion Sous-Catégories";?>
<?php ob_start();?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Sous-Catégories</h1>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($subCategories as $subCategorie){
            ?>
            <tr>
            <td><?= $subCategorie['name'] ?></td>
            <td><?=$subCategorie['description']?></td>                
            <td id="modif">  <div id="modif1"><a href="index.php?page=modificationSubCat&id=<?php echo $subCategorie['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Modifier</a>  
            <a href="index.php?page=manageSubCat&id= <?php echo $subCategorie['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Supprimer</a><div></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>