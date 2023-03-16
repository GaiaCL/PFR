<?php ob_start(); ?>
<footer>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-5 d-flex flex-column justify-content-center align-items-center mt-5 mb-5 footerSection" id="adressSection">
                <img src="../src/assets/images/magicboxfooter.webp" alt="Magic Box Logo Small">
                <p>5124 MAPLE COURT 
                DOWNTOWN SUNNYDALE</p>
                <p>(805) 555-8966</p>
            </div>
            <div class="col-2 mt-5 mb-5 footerSection">
                <h2>MAGIC BOX</h2>
                <ul>
                    <li><a href="index.php?page=Shop" >Shop</a></li>
                    <li><a href="index.php?page=Delivery" >Delivery & Order</a></li>
                    <li><a href="index.php?page=Mentions" >Legal Mentions</a></li>
                    <li><a href="index.php?page=Conditions" >Sales Conditions</a></li>
                    <li><a href="index.php?page=FAQ" >FAQs</a></li>
                    <li><a href="index.php?page=AboutUs" >About Us</a></li>
                    <li><a href="index.php?page=Partner" >Partner Links</a></li>
                </ul>
            </div>
            <div class="col-2 mt-5 mb-5 footerSection">
            <h2>Customer Space</h2>
                <ul>
                    <li><a href="index.php?page=Sponsorship" >Sponsorship</a></li>
                    <li><a href="index.php?page=Loyalty" >Loyalty Program</a></li>
                    <li><a href="index.php?page=Follow" >Follow your Order</a></li>
                    <li><a href="index.php?page=ReturnCancel" >Return/Cancel Order</a></li>
                    <li><a href="index.php?page=Contact" >Contact</a></li>
                </ul>
            </div>
            <div class="col-2 mt-5 mb-5 footerSection">
            <h2>Direct Links</h2>
                <ul>
                    <li><a href="index.php?page=Product&id=2" >Incenses</a></li>
                    <li><a href="index.php?page=Product&id=3" >Candles & Rituals</a></li>
                    <li><a href="index.php?page=productSC&id=21" >Jewelry</a></li>
                    <li><a href="index.php?page=productSC&id=14" >Tarot Cards</a></li>
                    <li><a href="index.php?page=productSC&id=16" >Pendulum</a></li>
                    <li><a href="index.php?page=productSC&id=25" >SpellBooks</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php $footer = ob_get_clean(); ?>