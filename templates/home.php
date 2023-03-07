<?php $title = "Home";
ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.jpg" class="d-block" width="1400em" alt="..." style="border-radius:2em;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.jpg" class="d-block" width="1400em" alt="..." style="border-radius:2em;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col d-flex justify-content-center">
                        <a href=""><img src="../src/assets/images/promoscarousel1.jpg" class="d-block" width="1400em" alt="..." style="border-radius:2em;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></a>
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
    <div class="row mt-5 mb-3 ms-5 me-5">
        <div class="col-12 d-flex flex-wrap" >
              <div id="someProducts" class="col-6 d-flex align-items-center justify-content-center" style="background: #193676; height:4em;width:20em;">
                <h2 style="font-size:1.8em;color:#DFD100;font-family: 'Baloo 2', cursive;" onclick="someProducts()">Some of Our Products</h2>
              </div>
              <div id="newProducts" class="col-6 d-flex align-items-center justify-content-center" style=" height:4em;width:20em;background: #304A8B;">
                <h2 style="font-size:1.8em;color:#DFD100;font-family: 'Baloo 2', cursive;" onclick="newProducts()">New Products</h2>
              </div>
            </div>

                <div id="someItems" class="col-12 p-5" style="background:#193676;display:flex;justify-content:space-evenly;">
                <?php foreach($someProducts as $someProduct) { ?>
                    <div class="card text-center" style="width: 15rem;background-color:#193781;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <a href="index.php/page=product&id=<?= $someProduct['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$someProduct['path']?>" class="card-img-top">
                    <div class="card-body">
                            <h5 class="card-title" style="height:4em;color: #DFD100;font-family: 'Merriweather';font-size:0.9em;"><?=$someProduct['name_products']?></h5>
                            <p class="card-text mb-2" style="color:#E10004;font-size:1.5em;text-shadow: 1px 1px 1px white;font-family: 'Merriweather';">$<?=$someProduct['price']?></p></a>
                            <a href="" class="btn" style="background:#DFD100;font-family: 'Merriweather';">Buy Now</a>
                    </div>
                    </div>
                <?php }?>
                </div>

                <div id="newItems" class="col-12 p-5" style="background:#193676;justify-content:space-evenly;display:none;">
                <?php foreach($newProducts as $newProduct) { ?>
                    <div class="card text-center" style="width: 15rem;background-color:#193781;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <a href="index.php/page=product&id=<?= $newProduct['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$newProduct['path']?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title" style="height:4em;color: #DFD100;font-family: 'Merriweather';font-size:0.9em;"><?=$newProduct['name_products']?></h5>
                            <p class="card-text mb-2" style="color:#E10004;font-size:1.5em;text-shadow: 1px 1px 1px white;font-family: 'Merriweather';">$<?=$newProduct['price']?></p></a>
                            <a href="" class="btn" style="background:#DFD100;font-family: 'Merriweather';">Buy Now</a>
                        </div>
                    </div>
                <?php }?>
                 </div>  
        
    </div>
    <div class="row d-flex justify-content-center align-items-center ms-5 me-5" style="background:#193676;" >
        <div class="col-5 d-flex align-items-center justify-content-center p-5" >
            <img src="../src/assets/images/magicboxarticle.jpg" style="border-radius:0.5em;box-shadow: 1px 2px 9px 6px rgba(0,0,0,0.46);width:35em;">
        </div>
        <div class="col-5 d-flex flex-column align-items-center justify-content-center text-center p-5" style=" height:20em;color:#DFD100;font-size:1.5em;font-family: 'Merriweather'; box-shadow: -5px 0px 12px 0px rgba(0,0,0,0.58);text-shadow: 2px 2px 2px #000000;">
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
    <div class="row">
        <div class="col">
            <h3><strong>Subscribe to our Newsletter !</strong>We will keep you informed.</h3>
        </div>
        <div class="col">
            <form method="post" action="#">
                    <input type="mail" name="mail" id="newsletter" placeholder="Mail"> 
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
<?php $content = ob_get_clean();
require ('layout.php');
?>
