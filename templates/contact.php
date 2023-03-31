<?php $title="Contact"; ?>
<?php ob_start();?>
    <div class="container-fluid">
        <div class="row p-3" id="titleContact">
            <div class="col-12 d-flex justify-content-center align-items-center"><h1>Contact</h1></div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-11 d-flex flex-column justify-content-center align-items-center mt-5 p-5" id="formContact">
                <?php if(empty($_POST['mail']) || empty($_POST['lastname']) || empty($_POST['firstname']) || empty($_POST['question'])) {?>
                <h2 class="p-5">Write to us and share your opinion or ask any questions !</h2>
                <form method="POST" action="#" class="d-flex flex-column justify-content-center align-items-center">
                    <?= $msg ?>
                    <input type="mail" name="mail" id="mail" placeholder="Mail">
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                    <input type="text" name="firstname" id="firstname" placeholder="First Name">
                    <textarea name="question" id="question" placeholder="What's your question ?..."></textarea>
                    <button type="submit" name="send" id="send" class="mt-3">Send</button>
                </form>
                <?php } else if(isset($_POST['mail']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['question'])){ ?>
                    <?= $msg; ?>
                <?php } ?>
            </div>
        </div>
        <div class="row m-5 p-5" id="mapSection">
            <div class="col-12 m-3text-center">
                <h2 class="p-4 text-center mb-5">Find our physical shop here !</h2>
            </div>
            <div id="map">

            </div>
        </div>
    </div>
<?php $content= ob_get_clean(); ?>
<?php require('layout.php');?>