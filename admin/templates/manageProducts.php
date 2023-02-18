<?php $title = 'Gestion Produits';?>
<?php ob_start(); ?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Produits</h1>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($products as $product){
            ?>
            <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['description'] ?></td>
            <td>$<?= $product['price'] ?></td>              
            <td id="modif">  <div id="modif1"><a href="index.php?page=modificationProducts&id=<?php echo $product['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Modifier</a>  
            <a href="index.php?page=manageProducts&id= <?php echo $product['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Supprimer</a><div></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>