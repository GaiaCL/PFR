<?php $title = "Home";
ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.jpg" class="d-block" width="1400em" alt="..." style="border-radius:2em;"></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.jpg" class="d-block" width="1400em" alt="..." style="border-radius:2em;"></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.jpg" class="d-block" width="1400em" alt="..." style="border-radius:2em;"></a>
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
        </div>
    </div>
    <div class="row m-5">
        <div class="col-12" style="background: #193676; height:30em;">
              <div class="col-12">
                <h2>Some of Our Products</h2>
              </div>
              <div class="col-12">
                <?php foreach($products as $product) { ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?=$product['path']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product['name']?></h5>
                        <p class="card-text"><?php$product['price']?></p>
                    </div>
                    </div>
                <?php }?>
              </div>  
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require ('layout.php');
?>
