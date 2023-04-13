<?php $title = "Update"; ?>
<?php ob_start(); ?>
<div class="container-fluid d-flex justify-content-center">
    <div class="row  formUpdate d-flex align-items-center">
        <?php if (!isset($_GET['action'])) { ?>
        <?php } else {
            $action = $_GET['action']; ?>
            <form method="post" action="" class="d-flex flex-column align-items-center justify-content-center p-4">
                <?= $msg ?>
                <?= $msgPassword ?>
                <?php if ($action == "updatePersonnal") { ?>
                    <div class="col-7 d-flex justify-content-center mb-4 supportMsg ">
                        <h2 class="text-center">You must contact us to change your last/first Name and your Country</h2>
                    </div>
                    <div class="col-5 text-center mb-3">
                        <input class="mb-2" type="text" name="lastname" disabled="disabled" value="<?= $accounts['lastname'] ?>">
                        <input type="text" name="firstname" disabled="disabled" value="<?= $accounts['firstname'] ?>">
                    </div>
                    <div class="col-5 text-center mb-3">
                        <input type="text" name="username_customer" value="<?= $accounts['username_customer'] ?>">
                    </div>
                    <div class="col-5 text-center mb-5">
                        <input type="text" name="country" disabled="disabled" value="<?= $accounts['country'] ?>">
                    </div>
                    <div class="col-5 text-center">
                        <button type="submit" name="valider" class="me-2 bttn">Save</button><a class="bttn" href="index.php?page=Account&action=details">Cancel</a>
                    </div>
                <?php } else if ($action == "updatePassword") { ?>
                    <div class="col-5 text-center mb-3">
                        <input type="password" name="passwordVerify" placeholder="Enter your previous password">
                    </div>
                    <div class="col-5 text-center mb-3">
                        <input type="password" name="newPassword" placeholder="Enter your new password">
                    </div>
                    <div class="col-5 text-center mb-5">
                        <input type="password" name="newPasswordVerify" placeholder="Enter your new password again">
                    </div>
                    <div class="col-5 text-center mb-3">
                        <button type="submit" name="valider" class="me-2 bttn">Save</button><a class="bttn" href="index.php?page=Account&action=details">Cancel</a>
                    </div>
                <?php } else if ($action == "updateMail") { ?>
                    <div class="col-5 text-center mb-5">
                        <input type="mail" name="mail" value="<?= $accounts['mail'] ?>">
                    </div>
                    <div class="col-5 text-center mb-3">
                        <button type="submit" name="valider" class="me-2 bttn">Save</button><a class="bttn" href="index.php?page=Account&action=details">Cancel</a>
                    </div>
                <?php } else if ($action == "updatePhone") { ?>
                    <div class="col-5 text-center mb-5">
                        <input type="phone" name="phone" value="0<?= $accounts['phone'] ?>">
                    </div>
                    <div class="col-5 text-center mb-3">
                        <button type="submit" name="valider" class="me-2 bttn">Save</button><a class="bttn" href="index.php?page=Account&action=details">Cancel</a>
                    </div>
                <?php } else if ($action == "updateAdress") { ?>
                    <div class="col-5 text-center mb-3">
                        <input type="adress" name="adress" value="<?= $accounts['adress'] ?>">
                    </div>
                    <div class="col-5 text-center mb-5">
                        <input type="zipcode" name="zipcode" value="<?= $accounts['zipcode'] ?> " class="mb-2">
                        <input type="city" name="city" value="<?= $accounts['city'] ?>">
                    </div>
                    <div class="col-5 text-center mb-3">
                        <button type="submit" name="valider" class="me-2 bttn">Save</button><a class="bttn" href="index.php?page=Account&action=details">Cancel</a>
                    </div>

                <?php } ?>
            </form>
        <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("layout.php") ?>