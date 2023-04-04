   <?php ob_start(); ?>      
<nav class="navbar navbar-expand-lg navbar-light bgTrans sticky-top" id="navMain">
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
        <li class="nav-item">
          <a class="nav-link txtNavTop d-flex flex-column align-items-center justify-content-center" href="index.php?page=Login">
            <i class="fa-regular fa-moon iconNav"></i>
            <p>Login</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link txtNavTop d-flex flex-column align-items-center justify-content-center" href="index.php?page=cart">
            <i class="fa-solid fa-cart-shopping position-relative iconNav"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            0
          </span></i>
            <p>0.00$</p>
          </a>
        </li>
        <?php } else if (isset($_SESSION['username_customer'])){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link txtNavTop d-flex flex-column align-items-center justify-content-center" href="#" id="loginOn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-moon iconNav"></i>
            <p style="color:wheat;"><?= $_SESSION['username_customer'] ?></p>
          </a>
          <ul class="dropdown-menu bg-transparent itemMenu mt-2" aria-labelledby="loginOn">
            <li><a class="dropdown-item itemUser text-center" href="index.php?page=Account">My Account</a></li>
            <li><a class="dropdown-item itemUser text-center" href="../src/model/logout.php">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link txtNavTop d-flex flex-column align-items-center justify-content-center" href="index.php?page=cart">
            <i class="fa-solid fa-cart-shopping position-relative iconNav"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            0
          </span></i>
            <p>0.00$</p>
          </a>
        </li>
        <?php }?>
      </ul>
    </div>
    </div>
</nav>
    <?php $header = ob_get_clean(); ?>