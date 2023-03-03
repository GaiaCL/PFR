   <?php ob_start(); ?>
   <nav class="container-fluid NavMagicBox">
        <div class="row">
          <div class="col pt-4">
              <a href="" class="socialMediaNB"><img width="30em" src="../src/assets/images/facebooknb.png"></a>
              <a href="" class="socialMediaNB"><img width="30em" src="../src/assets/images/twitternb.png"></a>
              <a href="" class="socialMediaNB"><img width="30em" src="../src/assets/images/youtubenb.png"></a>
              <a href="" class="socialMediaNB"><img width="30em" src="../src/assets/images/instagramnb.png"></a>
          </div>
          <div class="col pt-4">
                      <form class="d-flex align-items-center formSearch" method="POST" action="">
                          <input type="text" class="form-control" placeholder="Search..." style="width:30em;border-radius:2em;margin-right:1em;">
                          <button class="btn" style="background-color:#DFD100;border-radius:2em;width:8em;">Search</button>
                      </form>
          </div>
          <div class="col d-flex justify-content-end pt-2 ps-2">
              <a href="" style="text-align:center;text-decoration:none;padding-top: 0.2em;">
                <img width="70em" src="../src/assets/images/signin.png">
                <p class="txtNavTop">Sign In</p>
              </a>
              <a href="" style="text-align:center;padding-top: 0.4em;text-decoration:none;">
                <img width="35em" src="../src/assets/images/cart.png">
                <p class="txtNavTop">0.00$</p>
              </a>
          </div>
        </div>
    </nav>
    <header>
      <div class="container-fluid d-flex justify-content-center">
          <div class="row">
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=IncensePlant"> Incense & Plant</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=CandlesRituals"> Candles & Rituals</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Divination"> Divination</a></div>
              <div class="col pe-5"><a href="index.php?page=Home"> <img width ="380em" src="../src/assets/images/magicboxlogotsp.png"></a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Cristals"> Cristals</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Library"> Library</a></div>
              <div class="col d-flex align-items-center"><a class="navBttn d-flex align-items-center justify-content-center" href="index.php?page=Infos"> Infos</a></div>
          </div>
      </div>
    </header>
    <?php $header = ob_get_clean(); ?>