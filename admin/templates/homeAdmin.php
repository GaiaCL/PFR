<?php $title = "Acceuil Admin"; ?>

<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col text-center mt-5">
            <h1 style="border:none;box-shadow:none;font-size:20em;">WELCOME <?=$_SESSION['username'];?> !</h1>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layoutAdmin.php'); ?>