   <?php ob_start(); ?>
   <nav class="container-fluid NavMagicBox">
        <div class="row">
          <div class="col pt-4">
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/facebooknb.webp" alt="Facebook"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/twitternb.webp" alt="Twitter"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/youtubenb.webp" alt="Youtube"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/instagramnb.webp" alt="Instagram"></a>
          </div>
          <div class="col pt-4">
                      <form class="d-flex align-items-center formSearch" method="POST" action="">
                          <input type="text" class="form-control" placeholder="Search..." style="width:30em;border-radius:2em;margin-right:1em;">
                          <button class="btn" id="searchBttn">Search</button>
                      </form>
          </div>
          <div class="col d-flex justify-content-end pt-2 ps-2">
              <a href="" id="signIn">
                <img src="../src/assets/images/signin.webp" alt="Sign In">
                <p class="txtNavTop">Sign In</p>
              </a>
              <a href="" id="cartShop">
                <img src="../src/assets/images/cart.webp" alt="Shopping Cart">
                <p class="txtNavTop">0.00$</p>
              </a>
          </div>
        </div>
  </nav>
    <header>
      <div class="container-fluid d-flex justify-content-center">
          <div class="row mb-5" id="navMain">
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=2"> Incense & Plant</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=3"> Candles & Rituals</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=4"> Divination</a></div>
              <div class="col pe-5"><a href="index.php?page=Home"> <img id="magicBoxLogo" src="../src/assets/images/magicboxlogotsp.webp" alt="Magic Box Logo"></a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=5"> Cristals</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=6"> Library</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Contact"> Contact</a></div>
          </div>
      </div>
    </header>
    <?php $header = ob_get_clean(); ?>