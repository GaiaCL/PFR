<?php $title = "Gestion Sous-Catégories";?>
<?php ob_start();?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Sous-Catégories</h1>
    <table class="table">
    <thead>
        <tr>
            <th class="col">Nom</th>
            <th class="col">Description</th>
            <th class="col">Catégorie</th>
            <th class="col text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($subCategories as $subCategorie){
            ?>
            <tr>
            <td><?= $subCategorie['name_sub_categorie'] ?></td>
            <td><?=$subCategorie['description']?></td>
            <td><?=$subCategorie['nameCat']?></td>                
            <td class="text-center">  
                <div class="mb-3 mt-1"><a href="index.php?page=modificationSubCat&id=<?php echo $subCategorie['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Modifier</a></div> 
                <div><a href="index.php?page=manageSubCat&id= <?php echo $subCategorie['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Supprimer</a></div>
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
                    <a href="?page=manageSubCat&pagenb=<?= ($currentPage == 1) ? $currentPage :$currentPage - 1 ?>" class="page-link" style="background:black;color:white;">Précédente</a>
                </li>
                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li>
                    <div class="cont p-2 m-1" style="background:black;color:white; "><?= (isset($_GET['pagenb'])) ? $_GET['pagenb'] : 1 ?><div>
                </li>
                <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="?page=manageSubCat&pagenb=<?= ($currentPage == $pages) ? $currentPage : $currentPage + 1 ?>" class="page-link" style="background:black;color:white;">Suivante</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require('layoutAdmin.php');
?>