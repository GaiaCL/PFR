<?php $title="Contact"; ?>
<?php ob_start();?>
    <div class="container-fluid">
        <div class="row p-3" id="titleContact">
            <div class="col-4 d-flex justify-content-end align-items-center"><img src="../src/assets/images/sageleft.webp" alt="Sage Left Side"></div>
            <div class="col-4 d-flex justify-content-center align-items-center"><h1>Contact</h1></div>
            <div class="col-4 d-flex justify-content-start align-items-center"><img src="../src/assets/images/sageright.webp" alt="Sage Right Side"></div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-11 d-flex flex-column justify-content-center align-items-center mt-5 p-5" id="formContact">
                <h2 class="p-5">Write to us and share your opinion or ask any questions !</h2>
                <form method="POST" action="#" class="d-flex flex-column justify-content-center align-items-center">
                    <input type="mail" name="mail" id="mail" placeholder="Mail">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <input type="text" name="surname" id="surname" placeholder="Surname">
                    <textarea placeholder="What's your question ?..."></textarea>
                    <input type="submit" name="send" id="send" value="Send">
                </form>
            </div>
        </div>
        <div class="row m-5 p-5" id="mapSection">
            <div class="col-12 m-3text-center">
                <h2 class="p-4 text-center mb-5">Find our physical shop here !</h2>
            </div>
            <div class="col" id="map">

            </div>
        </div>
    </div>
<?php $content= ob_get_clean(); ?>
<?php require('layout.php');?>