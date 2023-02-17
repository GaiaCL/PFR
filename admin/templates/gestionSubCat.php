<?php require('../src/model/gestionSubCatVerif.php');?>

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
            <td id="modif">  <div id="modif1"><a href="index.php?action=modificationSubCat&id=<?php echo $subCategorie['id']?>" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Modifier</a>  
            <a href="index.php?page=gestionSubCat&id= <?php echo $subCategorie['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Supprimer</a><div></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<section class='d-flex justify-content-center'>
    <ul class="pagination">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="?action=gestionSubCat&pagenb=<?= ($currentPage == 1) ? $currentPage :$currentPage - 1 ?>" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Précédente</a>
        </li>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
        <li>
            <div class="ms-1 me-1 ps-1 pe-1" style="background-color:black;color:white;border-radius:1em;"><?= (isset($_GET['pagenb'])) ? $_GET['pagenb'] : 1 ?><div>
        </li>
        <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
        <a href="?action=gestionSubCat&pagenb=<?= ($currentPage == $pages) ? $currentPage : $currentPage + 1 ?>" style="background-color:black;padding:0.3em;color:white;border-radius:1em;">Suivante</a>
        </li>
    </ul>
</section>