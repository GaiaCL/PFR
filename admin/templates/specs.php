<?php $title = "Sous-Catégories"; ?>
<?php ob_start(); ?>
<div class="container">
    <h1 style="margin-top: 5em;box-shadow:none;">Specifications</h1>
    <div class="row d-flex justify-content-center" style="margin-top:5em;">
    <div class="col-sm-5 mb-3 mb-sm-0">
        <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Gestion des Specifications</h5>
            <p class="card-text">Vous pourrez en choisissant cette option gérer toutes les specs de la boutique en ligne Magic Box.</p>
            <a href="index.php?page=specsColors" class="btn btn-primary me-4">Colors</a><a href="index.php?page=specsSizes" class="btn btn-primary">Sizes</a>
        </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">Ajouter une Specification</h5>
            <p class="card-text">Vous pourrez en choisissant cette option ajouter de nouvelles specs pour la boutique en ligne Magic Box.</p>
            <a href="index.php?page=addSpecs&type=colors" class="btn btn-primary me-4">Colors</a> <a href="index.php?page=addSpecs&type=sizes" class="btn btn-primary">Sizes</a>
        </div>
        </div>
    </div>
    </div>
</div>
<?php $content = ob_get_clean(); 
require('layoutAdmin.php');
?>