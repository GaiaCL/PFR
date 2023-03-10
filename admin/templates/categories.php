<?php $title ="Catégories";?>
<?php ob_start(); ?>
<div class="container">
    <h1 style="margin-top: 5em;box-shadow:none;">Categories</h1>
    <div class="row d-flex justify-content-center" style="margin-top:5em;">
    <div class="col-sm-5 mb-3 mb-sm-0">
        <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Gestion des Categories</h5>
            <p class="card-text">Vous pourrez en choisissant cette option gérer toutes les catégories de la boutique en ligne Magic Box.</p>
            <a href="index.php?page=manageCat" class="btn btn-primary">Gérer</a>
        </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Ajouter une Categorie</h5>
            <p class="card-text">Vous pourrez en choisissant cette option ajouter de nouvelles catégories pour la boutique en ligne Magic Box.</p>
            <a href="index.php?page=addCat" class="btn btn-primary">Ajouter</a>
        </div>
        </div>
    </div>
    </div>
</div>
<?php $content = ob_get_clean(); 
require('layoutAdmin.php');
?>
