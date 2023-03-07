<?php $title = 'Gestion Produits';?>
<?php ob_start(); ?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Produits</h1>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
            <th scope="col">Stocks</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($products as $product){
            ?>
            <tr>
            <td><?= $product['name_products'] ?></td>
            <td><?= $product['description'] ?></td>
            <td>$<?= $product['price'] ?></td>
            <td><?= $product['date_ajout'] ?></td>
            <td><?= $stock ?></td>
            <td><?= $product['nameSubCat'] ?></td>                
            <td class="text-center">  
                <div class="mb-3 mt-3"><a href="index.php?page=modificationProducts&id=<?php echo $product['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Modifier</a></div> 
                <div><a href="index.php?page=manageProducts&id= <?php echo $product['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Supprimer</a></div>
            </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<div class="container-fluid">
    <div class="row ">
        <div class="col-12 d-flex justify-content-center">
            <ul class="pagination d-flex align-items-center">
                <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                    <a href="?page=manageProducts&pagenb=<?= ($currentPage == 1) ? $currentPage :$currentPage - 1 ?>" class="page-link" style="background:black;color:white;">Précédente</a>
                </li>
                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li>
                    <div class="cont p-2 m-1" style="background:black;color:white; "><?= (isset($_GET['pagenb'])) ? $_GET['pagenb'] : 1 ?><div>
                </li>
                <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="?page=manageProducts&pagenb=<?= ($currentPage == $pages) ? $currentPage : $currentPage + 1 ?>" class="page-link" style="background:black;color:white;">Suivante</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>