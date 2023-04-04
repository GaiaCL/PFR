<?php $title = "Home";
ob_start(); ?>
<div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center  mt-4 text-center">
            <img src="../src/assets/images/hands.webp" id="welcomingImg" class="img-fluid">
            <?php if(!isset($_SESSION['username_customer'])) {?>
                <p id="homeText" class="fs-1 fs-sm-5 fs-md-4 fs-lg-1"> True Magic lies within you...<br> Discover all of our Witchraft supplies ! </p>
            <?php   } else if(isset($_SESSION['username_customer'])){ ?>
                <p id="homeText" class="fs-1"> Welcome<br> <?= $_SESSION['username_customer'] ?> ! </p>
                <?php   } ?>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require ('layout.php');
?>
