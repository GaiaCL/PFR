<?php $title = "Home";
ob_start(); ?>
<div class="container-fluid">
    <div class="row">
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
        </div>
    </div>
    <div class="row mt-5 mb-5 ms-3 me-3">
        <div class="col-12 d-flex flex-wrap" >
              <div id="someProducts" class="col-6 d-flex align-items-center justify-content-center">
                <h2 onclick="someProducts()">Some of Our Products</h2>
              </div>
              <div id="newProducts" class="col-6 d-flex align-items-center justify-content-center">
                <h2 onclick="newProducts()">New Products</h2>
              </div>
            </div>

                <div id="someItems" class="col-12 p-5">
                <?php foreach($someProducts as $someProduct) { ?>
                    <div class="card text-center cardProducts">
                        <a href="index.php/page=product&id=<?= $someProduct['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$someProduct['path']?>" class="card-img-top" alt="Product Picture">
                    <div class="card-body">
                            <h3 class="card-title cardTitleProducts"><?=$someProduct['name_products']?></h3>
                            <p class="card-text mb-2 cardPrice">$<?=$someProduct['price']?></p></a>
                            <a href="" class="btn buttonBuy mt-2">Buy Now</a>
                    </div>
                    </div>
                <?php }?>
                </div>

                <div id="newItems" class="col-12 p-5" style="display:none;">
                <?php foreach($newProducts as $newProduct) { ?>
                    <div class="card text-center cardProducts">
                        <a href="index.php/page=product&id=<?= $newProduct['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$newProduct['path']?>" class="card-img-top" alt="New Product Picture">
                        <div class="card-body">
                            <h5 class="card-title cardTitleProducts"><?=$newProduct['name_products']?></h5>
                            <p class="card-text mb-2 cardPrice">$<?=$newProduct['price']?></p></a>
                            <a href="" class="btn buttonBuy mt-2">Buy Now</a>
                        </div>
                    </div>
                <?php }?>
                 </div>  
        
    </div>
    <div class="row d-flex justify-content-center align-items-center ms-3 me-3" id="newsPaper" >
        <div class="col-5 d-flex align-items-center justify-content-center p-5" >
            <img src="../src/assets/images/magicboxarticle.webp" alt="Newspaper Article Magic Box">
        </div>
        <div class="col-5 d-flex flex-column align-items-center justify-content-center text-center p-5" id="newsText">
            <p><strong>Your One-stop Spot to Shop 
                for all your Occult Needs.
                <br />
                Let Us Make It Easy !</strong><p>

                <p>Find all you need to make your rituals successful with our variety of products as such as Incenses, Crystals, Magick Books & Grimoires ...

                Each Friday our personnal Fortune Teller will read into your future to help move forward and get the best of your own life !

                And the best in all of this is that you can Find Us in our Physical Shop at this adress</p>

                <p><strong>5124 MAPLE COURT 
                DOWNTOWN SUNNYDALE</strong></p>
        </div>
    </div>
    <div class="row mt-3 me-3 ms-3 d-flex justify-content-center align-items-center" id="newsLetter">
        <div class="col-4 text-center newsLetterSub">
            <h3>Subscribe to our Newsletter !</h3>
            <h4>We will keep you informed.</h4>
        </div>
        <div class="col-4 text-center newsLetterSub">
            <form method="post" action="#">
                    <input type="mail" name="mail" id="newsletter" placeholder="Mail" class="p-3"> 
                    <button type="submit" name="newsletterValidation">OK</button>
            </form>
        </div>
        <div class="col-4 text-center newsLetterSub">
            <div class="col">
                <h3>Follow Us !</h3>
            </div>
            <div class="col">
                <a href="" class="socialsColor"><img src="../src/assets/images/facebook.webp" alt="Facebook Couleur"></a>
                <a href="" class="socialsColor"><img src="../src/assets/images/twitter.webp" alt="Twitter Couleur"></a>
                <a href="" class="socialsColor"><img src="../src/assets/images/youtube.webp" alt="Youtube Couleur"></a>
                <a href="" class="socialsColor"><img src="../src/assets/images/instagram.webp" alt="Instagram Couleur"></a>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require ('layout.php');
?>
