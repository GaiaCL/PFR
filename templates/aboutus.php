<?php $title = "About Us"; ?>
<?php ob_start();?>
<div class="container-fluid">
<div class="row p-3" id="titleAbout">
            <div class="col-4 d-flex justify-content-end align-items-center"><img src="../src/assets/images/sageleft.webp" alt="Sage Left Side"></div>
            <div class="col-4 d-flex justify-content-center align-items-center"><h1>About Us !</h1></div>
            <div class="col-4 d-flex justify-content-start align-items-center"><img src="../src/assets/images/sageright.webp" alt="Sage Right Side"></div>
        </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>