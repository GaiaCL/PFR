<?php $title ="Update";?>
<?php ob_start();?>
<div class="container-fluid">
    <div class="row">
        <?php if(!isset($_GET['action'])){?>
            <?php } else {
                $action = $_GET['action']; 
                if($action == "updatePersonnal"){?>
                <form method="post" action ="">
                        <input type="text" name="lastname" disabled= "disabled" value="<?= $accounts['lastname'] ?>">
                        <input type="text" name="firstname" disabled= "disabled" value="<?= $accounts['firstname'] ?>">
                        <input type="text" name="username_customer" value="<?= $accounts['username_customer'] ?>">
                        <input type="text" name="country" disabled= "disabled" value="<?= $accounts['country']?>">
                        <button type="submit" name="valider">Save</button><button>Cancel</button>
                </form>
                <?php } else if($action == "updatePassword"){?>
                    <form method="post" action ="index.php?page=account&action=details">
                    <input type="password" name="passwordVerify"  placeholder="Enter your previous password">
                    <input type="password" name="newPassword"  placeholder="Enter your new password">
                    <input type="password" name="newPasswordVerify"  placeholder="Enter your new password again">
                    <button type="submit" name="valider">Save</button><button>Cancel</button>
                    </form>
                <?php } else if($action == "updateMail"){?>
                    <form method="post" action ="index.php?page=account&action=details">
                        <input type="mail" name="mail" value="<?= $accounts['mail']?>">
                        <button type="submit" name="valider">Save</button><button>Cancel</button>
                    </form>
                <?php } else if($action == "updatePhone"){ ?>
                    <form method="post" action ="index.php?page=account&action=details">
                        <input type="phone" name="phone" value="0<?= $accounts['phone']?>">
                        <button type="submit" name="valider">Save</button><button>Cancel</button>
                    </form>
                <?php }  else if($action == "updateAdress"){ ?>
                    <form method="post" action ="index.php?page=account&action=details">
                        <input type="adress" name="adress" value="<?= $accounts['adress']?>">
                        <input type="zipcode" name="zipdcode" value="<?= $accounts['zipcode']?>">
                        <input type="phone" name="phone" value="0<?= $accounts['phone']?>">
                        <button type="submit" name="valider">Save</button><button>Cancel</button>
                    </form>
                <?php }?>
                        
            <?php } ?>
    </div>
</div>
<?php $content = ob_get_clean();?>
<?php require("layout.php")?>