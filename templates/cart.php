<?php $title = "Cart" ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>SHOPPING CART</h1>
        </div>
        <div class="col">
            
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>