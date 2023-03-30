<?php $title = "Home";
ob_start(); ?>
<div class="container-fluid">
    <!--<div class="row">
        <div class="col-12 p-0">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="col d-flex justify-content-center align-items-center carouselPosition">
                        <a href=""><img src="../src/assets/images/promoscarousel1.webp" class="d-block carouselPicture" alt="Promotion Carousel"></a>
                        <p>Come & Celebrate <br/> SAMHAIN with Us !<br/>
                        All ritual products are 50% off !</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.webp" class="d-block carouselPicture" alt="Promotion Carousel"></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.webp" class="d-block carouselPicture"  alt="Promotion Carousel"></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>-->
        <div class="row d-flex justify-content-center align-items-center text-center mt-5"  >
            <img src="../src/assets/images/hands.webp" id="welcomingImg">
            <?php if(!isset($_SESSION['username'])) {?>
                <p id="homeText"> True Magic lies within you...<br> Discover all of our Witchraft supplies ! </p>
            <?php   } else if(isset($_SESSION['username'])){ ?>
                <p id="homeText"> Welcome<br> <?= $_SESSION['username'] ?> ! </p>
                <?php   } ?>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require ('layout.php');
?>
