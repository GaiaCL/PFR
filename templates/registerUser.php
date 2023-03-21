<?php $title = "Registration";?>
<?php ob_start(); ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-5 text-center" id="registration">
            <h1 class="box-title pb-3">Register New Account</h1>
                <form action="" method="post" >
                    
                    <?= $register; ?>
                    <div class="row py-3">
                        <div class="col-6 form-group">
                            <label for="exampleInputEmail1" class="pb-1">First Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="exampleInputEmail1" class="pb-1">Last Name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required />
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12 form-group">
                            <label for="exampleInputEmail1" class="pb-1">Adress</label>
                            <input type="text" class="form-control" name="adress" placeholder="Adress" required />
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-3 form-group">
                            <label for="exampleInputEmail1" class="pb-1">Zipcode</label>
                            <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" required />
                        </div>
                        <div class="col-9 form-group">
                            <label for="exampleInputEmail1" class="pb-1">City</label>
                            <input type="text" class="form-control" name="city" placeholder="City" required />
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-8 form-group">
                            <label for="exampleInputEmail1" class="pb-1">Mail</label>
                            <input type="mail" class="form-control" name="mail" placeholder="Mail" required />
                        </div>
                        <div class="col-4 form-group">
                            <label for="exampleInputEmail1" class="pb-1">Phone Number</label>
                            <input type="phone" class="form-control" name="phone" placeholder="Phone" required />
                        </div>
                    </div>
                    <div class="row pb-3 d-flex justify-content-center">
                        <div class="col-4">
                            <label for="exampleInputEmail1" class="pb-1">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" required />
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-6 form-group">
                            <label for="exampleInputEmail1" class="pb-1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                        <div class="col-6 form-group">
                            <label for="exampleInputEmail1"- class="pb-1">Confirm Password </label>
                            <input type="password" class="form-control" name="passwordVerify" placeholder="Confirm Password" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 d-flex justify-content-end">
                            <input type="submit" name="submit" value="Register" class="box-button" id="register"/>
                        </div>
                        <div class="col-6 d-flex justify-content-start align-items-center">
                            <a href="index.php?page=Home" id="returnStore">Return to store</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean();?>
<?php require('layout.php'); ?>