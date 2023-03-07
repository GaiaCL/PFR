<?php $title = 'Gestion Images';?>
<?php ob_start(); ?>
<h1 style="box-shadow: none;margin-top:2em;">Gestion des Images</h1>
    <table class="table">
    <thead>
        <tr>
            <th class="col">Nom</th>
            <th class="col">Description</th>
            <th class="col">Image</th>
            <th class="col text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($pictures as $picture){
            ?>
            <tr>
            <td><?= $picture['name_pictures'] ?></td>
            <td><?= $picture['description'] ?></td>
            <td><?= "<img src=../".$picture['path']." style='width:10em;'>" ?></td>                
            <td class="text-center">  
                <div class="mb-3 mt-5"><a href="index.php?page=modificationPictures&id=<?php echo $picture['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Modifier</a></div> 
                <div><a href="index.php?page=managePictures&id= <?php echo $picture['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:0.5em;">Supprimer</a></div>
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
                    <a href="?page=managePictures&pagenb=<?= ($currentPage == 1) ? $currentPage :$currentPage - 1 ?>" class="page-link" style="background:black;color:white;">Précédente</a>
                </li>
                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li>
                    <div class="cont p-2 m-1" style="background:black;color:white; "><?= (isset($_GET['pagenb'])) ? $_GET['pagenb'] : 1 ?><div>
                </li>
                <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="?page=managePictures&pagenb=<?= ($currentPage == $pages) ? $currentPage : $currentPage + 1 ?>" class="page-link" style="background:black;color:white;">Suivante</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); 
require('layoutAdmin.php');
?>