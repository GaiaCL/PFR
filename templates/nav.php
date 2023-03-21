   <?php ob_start(); ?>
   <nav class="container-fluid NavMagicBox">
        <div class="row">
          <div class="col-3 d-flex justify-content-start align-items-center ps-5">
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/facebooknb.webp" alt="Facebook"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/twitternb.webp" alt="Twitter"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/youtubenb.webp" alt="Youtube"></a>
              <a href="" class="socialMediaNB"><img  src="../src/assets/images/instagramnb.webp" alt="Instagram"></a>
          </div>
          <div class="col-6  d-flex justify-content-center align-items-center">
                      <form class="d-flex align-items-center formSearch" method="POST" action="">
                          <input type="text" class="form-control" placeholder="Search..." id="srch">
                          <button class="btn" id="searchBttn">Search</button>
                      </form>
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            <div class="row d-flex justify-content-center align-items-center pe-5">
              <?php if(!isset($_SESSION['username'])){?>
              <div class="col-6 d-flex flex-column justify-content-center align-items-center p-0">
                  <img src="../src/assets/images/signinUser.webp" alt="Sign In" >
                  <a href="index.php?page=Login"><button type="button" class="btn txtNavTop">
                  Sign In
                  </button></a>
              </div>
              <?php } else if (isset($_SESSION['username'])){ ?>
                  <div class="col-6 d-flex flex-column justify-content-center align-items-center p-0">
                      <div class="nav-item dropdown-center"> 
                        <button class="nav-link dropdown d-flex flex-column align-items-center" type="button" data-bs-toggle="dropdown" id="loginUser">
                            <img src="../src/assets/images/signinUser.webp" alt="Sign In" >
                            <?= $_SESSION['username'] ?>
                        </button>
                        <ul class="dropdown-menu itemMenu mt-2">
                          <li><a class="dropdown-item itemUser" href="#">My Account</a></li>
                          <li><a class="dropdown-item itemUser" href="index.php?action=logout">Logout</a></li>
                        </ul>
                    </div>
                  </div>
                <?php }?>
              <div class="col-6 d-flex flex-column justify-content-center align-items-center pt-2 mt-2">
                <a href="" id="cartShop">
                  <img src="../src/assets/images/signinCart.webp" alt="Shopping Cart" >
                  <p class="txtNavTop">0.00$</p>
                </a>
              </div>
            </div>
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