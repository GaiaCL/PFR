<?php $title ="Reponse Message"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="">
                <input>
                </input>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layoutAdmin.php'); ?>