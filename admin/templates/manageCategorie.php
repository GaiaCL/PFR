<?php $title = "Gestion des Catégories"; ?>
<?php ob_start();?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Catégories</h1>
    <table class="table">
    <thead>
        <tr>
            <th class="col">Nom</th>
            <th class="col">Description</th>
            <th class="col text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($categories as $categorie){
            ?>
            <tr>
            <td><?= $categorie['name_categorie'] ?></td>
            <td><?=$categorie['description']?></td>                
            <td class="text-center">  
                <div class="mb-3 mt-1"><a href="index.php?page=modificationCat&id=<?php echo $categorie['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Modifier</a></div> 
                <div><a href="index.php?page=manageCat&id= <?php echo $categorie['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Supprimer</a></div>
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
