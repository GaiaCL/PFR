   <?php ob_start(); ?>
    <nav  class="sticky-top bgTrans" id="navMain">
      <div class="container-fluid">
    <a class="navbar-brand ps-5" href="index.php?page=Home">
      <img id="magicBoxLogo" src="../src/assets/images/magicboxlogotsp.webp" alt="Magic Box Logo" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars bttnCollapse"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end pe-5 navbarNav" >
      <ul class="navbar-nav d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=2">Incense & Plant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=3">Candles & Rituals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=4">Divination</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=5">Crystals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=6">Library</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navBttn d-flex align-items-center justify-content-center" href="index.php?page=Contact">Contact</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end pe-5 navbarNav" >
      <ul class="navbar-nav d-flex align-items-center">
        <?php if(!isset($_SESSION['username_customer'])){?>
                  <div class="col-6">
                      <a href="index.php?page=Login" class="txtNavTop d-flex flex-column align-items-center justify-content-center">
                      <i class="fa-regular fa-moon" style="color: #ffffff;font-size:1.5em;"></i>
                      <p>Login</p>
                      </a>
                  </div>
                  <div class="col-6">
                    <a href="" class="txtNavTop d-flex flex-column align-items-center justify-content-center">
                    <i class="fa-solid fa-cart-shopping" style="color: #ffffff;font-size:1.5em;"></i>
                      <p>0.00$</p>
                    </a>
                  </div>
                  <?php } else if (isset($_SESSION['username_customer'])){ ?>
                      <div class="col-6">
                          <div class="nav-item dropdown-center "> 
                            <a class="nav-link dropdown  d-flex flex-column align-items-center justify-content-center txtNavTop" data-bs-toggle="dropdown" href="" id="loginOn">
                                <i class="fa-solid fa-moon" style="color: #ffffff;font-size:1.5em;"></i>
                                <p style="color:wheat;"><?= $_SESSION['username_customer'] ?></p>
                            </a>
                            <ul class="dropdown-menu bg-transparent itemMenu mt-2">
                              <li ><a class="dropdown-item itemUser text-center" href="index.php?page=Account">My Account</a></li>
                              <li><a class="dropdown-item itemUser text-center" href="../src/model/logout.php">Logout</a></li>
                            </ul>
                        </div>
                      </div>
                      <div class="col-6">
                      <a href="" class="txtNavTop d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-solid fa-cart-shopping" style="color: #ffffff;font-size:1.5em;"></i>
                        <p>0.00$</p>
                      </a>
                      </div>
                    <?php }?>
                </div>
            </div>
          </div>
      </div>
      </nav>
    <?php $header = ob_get_clean(); ?>