<?php $title ="Login";?>
<?php ob_start(); ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-5 text-center" id="login">
            <?php if(isset($_SESSION['username'])){?>
                    <?= $login; ?>
                    <?php } else {?>
                <h1 class="box-title">Login </h1>
                <h2 class="box-subtitle pb-3"> Don't have an account yet ? <a href="index.php?page=Register">Create one here !</a></h2>
                <form action="" method="post" >
                    <?= $login; ?>
                    <div class="row py-3 d-flex justify-content-center">
                        <div class="col-6 form-group">
                            <label for="exampleInputEmail1" class="pb-1">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" required />
                        </div>
                    </div>
                    <div class="row py-3 pb-5 d-flex justify-content-center">
                        <div class="col-6 form-group text-center">
                            <label for="exampleInputEmail1" class="pb-1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
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