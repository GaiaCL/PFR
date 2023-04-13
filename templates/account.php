<?php $title = "My Account";?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-2 pt-5 d-flex justify-content-end" style="height:20em;">
            <ul class="nav flex-column justify-content-evenly" id="navAccount">
                <li class="nav-item text-start">
                    <a class="nav-link active" aria-current="page" href="index.php?page=Account&action=resume" ><i class="fa-solid fa-house me-3" style="color:white;"></i>Account Resume</a>
                </li>
                <li class="nav-item text-start">
                    <a class="nav-link" href="index.php?page=Account&action=details"><i class="fa-solid fa-user me-3" style="color:white;"></i>Account Details</a>
                </li>
                <li class="nav-item text-start">
                    <a class="nav-link" href="index.php?page=Account&action=billing"><i class="fa-regular fa-credit-card me-3" style="color:white;"></i>Billing Informations</a>
                </li>
                <li class="nav-item text-start">
                    <a class="nav-link"  href="index.php?page=Account&action=history"><i class="fa-brands fa-shopify me-3" style="color:white;"></i>Orders History</a>
                </li>
            </ul>
        </div>
        <div class="col-10 pt-5" id="accountResult">
            <?php if (!isset($_GET['action'])){ ?>
                <div class="row m-0" id="resumeBox" style="display:flex;justify-content: start;">
                        <div class="col-5 accountBox d-flex flex-column justify-content-center pb-3 me-5" >
                            <div class="d-flex align-items-center justify-content-between p-4">
                                <h2 class="me-3"> ACCOUNT INFORMATIONS</h2>
                            </div>
                            <?php foreach($accountInfos as $accountInfo) { ?>
                                <table>
                                    <tr>
                                        <td class="p-3">Name</td>
                                        <td class="p-3 infos"><?= substr($accountInfo['firstname'], 0, 1)."******".substr($accountInfo['firstname'], (strlen($accountInfo['firstname']))-1, 0),
                                substr($accountInfo['lastname'], 0, 1)."******".substr($accountInfo['lastname'], (strlen($accountInfo['lastname']))-1, 0) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Username</td>
                                        <td class="p-3 infos"><?= $accountInfo['username_customer'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Mail</td>
                                        <td class="p-3 infos"><?=  substr($accountInfo['mail'], 0, 1)."******".substr($accountInfo['mail'], (strlen($accountInfo['mail']))-11, 11)?></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Phone</td>
                                        <td class="p-3 infos"><?= $accountInfo['phone_code'] ?><?= substr($accountInfo['phone'], 0, 1)."******".substr($accountInfo['phone'], (strlen($accountInfo['phone']))-2, 2) ?></td>
                                    </tr>
                                </table>
                                <?php }?>
                            
                        </div>
                        <div class="col-5 accountBox pb-3" >
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h2 class="me-3"> PAST ORDERS</h2>
                            </div>
                            
                        </div>
                </div>
            <?php }
            else {
                $action = $_GET['action'];
        if($action == "resume") {?>
            <div class="row m-0">
                <div class="col-5 accountBox d-flex flex-column justify-content-center pb-3 me-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> ACCOUNT INFORMATIONS</h2>
                    </div>
                    <?php foreach($accountInfos as $accountInfo) { ?>
                        <table>
                            <tr>
                                <td class="p-3">Name</td>
                                <td class="p-3 infos"><?= substr($accountInfo['firstname'], 0, 1)."******".substr($accountInfo['firstname'], (strlen($accountInfo['firstname']))-1, 0),
                        substr($accountInfo['lastname'], 0, 1)."******".substr($accountInfo['lastname'], (strlen($accountInfo['lastname']))-1, 0) ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Username</td>
                                <td class="p-3 infos"><?= $accountInfo['username_customer'] ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Mail</td>
                                <td class="p-3 infos"><?=  substr($accountInfo['mail'], 0, 1)."******".substr($accountInfo['mail'], (strlen($accountInfo['mail']))-11, 11)?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Phone</td>
                                <td class="p-3 infos"><?= $accountInfo['phone_code'] ?><?= substr($accountInfo['phone'], 0, 1)."******".substr($accountInfo['phone'], (strlen($accountInfo['phone']))-2, 2) ?></td>
                            </tr>
                        </table>
                        <?php }?>
                    
                </div>
                <div class="col-5 accountBox pb-3" >
                    <div class="d-flex align-items-center justify-content-between p-3">
                        <h2 class="me-3"> PAST ORDERS</h2>
                    </div>
                    
                </div>
            </div>
                    <?php } else if($action == "details") {?>
            <div class="row m-0" >
                <div class="col-10 accountBox d-flex flex-column justify-content-center pb-3 me-5 mb-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> PERSONNAL INFORMATIONS</h2>
                        <a href="index.php?page=Update&action=updatePersonnal" class="updateBttn"><i class="fa-solid fa-pen me-2"></i>Update  ></a>
                    </div>
                    <?php foreach($accountInfos as $accountInfo) { ?>
                        <table class="tableInfos">
                            <tr>
                                <td class="p-3" >Name</td>
                                <td class="p-3 infos"><?= substr($accountInfo['firstname'], 0, 1)."******".substr($accountInfo['firstname'], (strlen($accountInfo['firstname']))-1, 0),
                        substr($accountInfo['lastname'], 0, 1)."******".substr($accountInfo['lastname'], (strlen($accountInfo['lastname']))-1, 0) ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Username</td>
                                <td class="p-3 infos"><?= $accountInfo['username_customer'] ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Country/State</td>
                                <td class="p-3 infos"><?= $accountInfo['country']?></td>
                            </tr>
                        </table>
                        <?php }?>
                    
                </div>
                <div class="col-10 accountBox d-flex flex-column justify-content-center pb-3 me-5 mb-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> PASSWORD</h2>
                        <a href="index.php?page=Update&action=updatePassword" class="updateBttn"><i class="fa-solid fa-pen me-2"></i>Update ></a>
                    </div>
                        <table class="tableInfos">
                            <tr>
                                <td class="p-3">Password</td>
                                <td class="p-3 infos">*************</td>
                            </tr>
                        </table>
                </div>
                <div class="col-10 accountBox d-flex flex-column justify-content-center pb-3 me-5 mb-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> E-MAIL</h2>
                        <a href="index.php?page=Update&action=updateMail" class="updateBttn"><i class="fa-solid fa-pen me-2"></i>Update ></a>
                    </div>
                    <?php foreach($accountInfos as $accountInfo) { ?>
                        <table class="tableInfos">
                            <tr>
                                <td class="p-3">Mail</td>
                                <td class="p-3 infos"><?=  substr($accountInfo['mail'], 0, 1)."******".substr($accountInfo['mail'], (strlen($accountInfo['mail']))-11, 11)?></td>
                            </tr>
                        </table>
                        <?php }?>
                    
                </div>
                <div class="col-10 accountBox d-flex flex-column justify-content-center pb-3 me-5 mb-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> PHONE NUMBER</h2>
                        <a href="index.php?page=Update&action=updatePhone" class="updateBttn"><i class="fa-solid fa-pen me-2"></i>Update ></a>
                    </div>
                    <?php foreach($accountInfos as $accountInfo) { ?>
                        <table class="tableInfos">
                            <tr>
                                <td class="p-3">Phone</td>
                                <td class="p-3 infos"><?= $accountInfo['phone_code'] ?><?= substr($accountInfo['phone'], 0, 1)."******".substr($accountInfo['phone'], (strlen($accountInfo['phone']))-2, 2) ?></td>
                            </tr>
                        </table>
                        <?php }?>
                    
                </div>
                <div class="col-10 accountBox d-flex flex-column justify-content-center pb-3 me-5 mb-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> ADRESS</h2>
                        <a href="index.php?page=Update&action=updateAdress" class="updateBttn"><i class="fa-solid fa-pen me-2"></i>Update ></a>
                    </div>
                    <?php foreach($accountInfos as $accountInfo) { ?>
                        <table class="tableInfos">
                            <tr>
                                <td class="p-3">Main Adress</td>
                                <td class="p-3 infos"> <?= substr($accountInfo['adress'], 0, 1)."******".substr($accountInfo['adress'], (strlen($accountInfo['adress']))-2, 0)?>
                                                    <br><?= $accountInfo['zipcode']?><br><?= $accountInfo['city']?></td>
                            </tr>
                        </table>
                        <?php }?>
                    
                </div>
            </div>
            <?php } else if ($action == "billing") {?>
            <div class="row m-0">
                <div class="col-10 accountBox d-flex flex-column justify-content-center pb-3 me-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> ACCOUNT bloop</h2>
                        <a href="index.php?page=Account&action=Details">Account Details ></a>
                    </div>
                    <?php foreach($accountInfos as $accountInfo) { ?>
                        <table>
                            <tr>
                                <td class="p-3">Name</td>
                                <td class="p-3 infos"><?= substr($accountInfo['firstname'], 0, 1)."******".substr($accountInfo['firstname'], (strlen($accountInfo['firstname']))-1, 0),
                        substr($accountInfo['lastname'], 0, 1)."******".substr($accountInfo['lastname'], (strlen($accountInfo['lastname']))-1, 0) ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Username</td>
                                <td class="p-3 infos"><?= $accountInfo['username_customer'] ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Mail</td>
                                <td class="p-3 infos"><?=  substr($accountInfo['mail'], 0, 1)."******".substr($accountInfo['mail'], (strlen($accountInfo['mail']))-11, 11)?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Phone</td>
                                <td class="p-3 infos"><?= $accountInfo['phone_code'] ?><?= substr($accountInfo['phone'], 0, 1)."******".substr($accountInfo['phone'], (strlen($accountInfo['phone']))-2, 2) ?></td>
                            </tr>
                        </table>
                        <?php }?>
                    
                </div>
            </div>
            <?php } else {?>
            <div class="row m-0">
                <div class="col-5 accountBox d-flex flex-column justify-content-center pb-3 me-5" >
                    <div class="d-flex align-items-center justify-content-between p-4">
                        <h2 class="me-3"> ACCOUNT bloop</h2>
                        <a href="index.php?page=Account&action=Details">Account Details ></a>
                    </div>
                    <?php foreach($accountInfos as $accountInfo) { ?>
                        <table>
                            <tr>
                                <td class="p-3">Name</td>
                                <td class="p-3 infos"><?= substr($accountInfo['firstname'], 0, 1)."******".substr($accountInfo['firstname'], (strlen($accountInfo['firstname']))-1, 0),
                        substr($accountInfo['lastname'], 0, 1)."******".substr($accountInfo['lastname'], (strlen($accountInfo['lastname']))-1, 0) ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Username</td>
                                <td class="p-3 infos"><?= $accountInfo['username_customer'] ?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Mail</td>
                                <td class="p-3 infos"><?=  substr($accountInfo['mail'], 0, 1)."******".substr($accountInfo['mail'], (strlen($accountInfo['mail']))-11, 11)?></td>
                            </tr>
                            <tr>
                                <td class="p-3">Phone</td>
                                <td class="p-3 infos"><?= $accountInfo['phone_code'] ?><?= substr($accountInfo['phone'], 0, 1)."******".substr($accountInfo['phone'], (strlen($accountInfo['phone']))-2, 2) ?></td>
                            </tr>
                        </table>
                        <?php }?>
                    
                </div>
                <div class="col-5 accountBox pb-3" >
                    <div class="d-flex align-items-center justify-content-between p-3">
                        <h2 class="me-3"> PAST ORDERS</h2>
                        <a href="index.php?page=Account&action=Details">Orders History ></a>
                    </div>
                    
                </div>
            </div>
            <?php }
            }?>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
