   <?php ob_start(); ?>
    <nav  class="sticky-top bgTrans" id="navMain">
      <div class="container-fluid">
          <div class="row " >
              <div class="col-4 d-flex align-items-center ps-5"><a href="index.php?page=Home"> <img id="magicBoxLogo" src="../src/assets/images/magicboxlogotsp.webp" alt="Magic Box Logo"></a></div>
              <div class="col-1 d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=2"> Incense & Plant</a></div>
              <div class="col-1 d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=3"> Candles & Rituals</a></div>
              <div class="col-1 d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=4"> Divination</a></div>
              <div class="col-1 d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=5"> Cristals</a></div>
              <div class="col-1 d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Product&id=6"> Library</a></div>
              <div class="col-1 d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Contact"> Contact</a></div>
              <div class="col-2 d-flex justify-content-end align-items-center pe-5">
                <div class="row d-flex justify-content-evenly align-items-center">
                  <?php if(!isset($_SESSION['username'])){?>
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
                  <?php } else if (isset($_SESSION['username'])){ ?>
                      <div class="col-6">
                          <div class="nav-item dropdown-center "> 
                            <a class="nav-link dropdown  d-flex flex-column align-items-center justify-content-center txtNavTop" data-bs-toggle="dropdown" href="" id="loginOn">
                                <i class="fa-solid fa-moon" style="color: #ffffff;font-size:1.5em;"></i>
                                <p style="color:wheat;"><?= $_SESSION['username'] ?></p>
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