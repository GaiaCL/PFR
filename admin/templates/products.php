<?php $title = "Sous-Catégories"; ?>
<?php ob_start(); ?>
<div class="container">
    <h1 style="margin-top: 5em;box-shadow:none;">Produits</h1>
    <div class="row d-flex justify-content-center" style="margin-top:5em;">
    <div class="col-sm-5 mb-3 mb-sm-0">
        <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Gestion des Produits</h5>
            <p class="card-text">Vous pourrez en choisissant cette option gérer tous les produits de la boutique en ligne Magic Box.</p>
            <a href="index.php?page=manageProducts" class="btn btn-primary">Gérer</a>
        </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Ajouter un produit</h5>
            <p class="card-text">Vous pourrez en choisissant cette option ajouter de nouveaux produits pour la boutique en ligne Magic Box.</p>
            <a href="index.php?page=addProducts" class="btn btn-primary">Ajouter</a>
        </div>
        </div>
    </div>
    </div>
</div>
<?php $content = ob_get_clean(); 
require('layoutAdmin.php');
?>