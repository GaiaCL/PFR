   <?php ob_start(); ?>
   <nav class="container-fluid NavMagicBox">
        <div class="row">
          <div class="col-3 pt-4">
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/facebooknb.webp" alt="Facebook"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/twitternb.webp" alt="Twitter"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/youtubenb.webp" alt="Youtube"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/instagramnb.webp" alt="Instagram"></a>
          </div>
          <div class="col-6  d-flex justify-content-center align-items-center">
                      <form class="d-flex align-items-center formSearch" method="POST" action="">
                          <input type="text" class="form-control" placeholder="Search..." style="width:30em;border-radius:2em;margin-right:1em;">
                          <button class="btn" id="searchBttn">Search</button>
                      </form>
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center ps-2">
            <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                <img src="../src/assets/images/signin.webp" alt="Sign In" >
                <button type="button" class="btn txtNavTop" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign In
                </button>
            </div>
            <div class="col-2 d-flex flex-column justify-content-center align-items-center pt-2">
              </a>
              <a href="" id="cartShop">
                <img src="../src/assets/images/cart.webp" alt="Shopping Cart">
                <p class="txtNavTop">0.00$</p>
              </a>
            </div>
          </div>
        </div>
  </nav>
  <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog">
              <div class="modal-content" id='loginForm'>
                <div class="modal-header">
                  <h1 class="modal-title fs-5"  id="exampleModalLabel">SIGN IN</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="d-flex flex-column justify-content-center align-items-center" action="" method="post" name="login" id='formLogin'>
                    <?= $fail; ?>
                    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
                    <label>
                    <input type="password" name="password" placeholder="Mot de passe">
                    </label>
                    <input type="submit" value="Login" name="submit" class="box-button p-1 buttonLogin">
                  </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <p>Don't have an account ?</p><a href='index.php?page=RegisterUser'>Register Here !</a>
                </div>
              </div>
            </div>
          </div>

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