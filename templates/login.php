<?php $title ="Login";?>
<?php ob_start(); ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center mb-5">
            <?php if(isset($_SESSION['username_customer'])){?>
                <div class="col-5 text-center" id="loginSuc">
                    <?= $login; ?>
                    <?php } else {?>
                <div class="col-5 text-center" id="login">
                <h1 class="box-title">Sign In</h1>
                <h2 class="box-subtitle pb-3"> Don't have an account yet ? <a href="index.php?page=Register">Create one here !</a></h2>
                <form action="" method="post" >
                    <?= $login; ?>
                    <div class="row py-3 d-flex justify-content-center mt-5">
                        <div class="col-8 form-group ">
                            <label for="exampleInputEmail1" >Username : <input type="text" class="form-control" name="username_customer" placeholder="Username" required /></label>
                        </div>
                    </div>
                    <div class="row py-3 pb-5 d-flex justify-content-center">
                        <div class="col-8 form-group ">
                            <label for="exampleInputEmail1" >Password : <input type="password" class="form-control" name="password_customer" placeholder="Password" required /></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <input type="submit" name="btn_login" value="Login" class="box-button" id="loginValidate"/>
                        </div>
                        <div class="col-6 d-flex justify-content-start align-items-center">
                            <a href="index.php?page=Home" id="returnStore">Return to store</a>
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>