<?php $title = "My Account";?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
        <ul class="nav flex-column" id="navAccount">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=Account&action=Resume">Account Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=Account&action=Details">Account Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=Account&action=BInfos">Billing Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=Account&action=OHistory">Orders History</a>
            </li>
        </ul>
        </div>
        <div class="col" id="accountResult">
                <div class="row">
                    <div class="col-12" id="innerAccount">
                        <div class="row p-5 d-flex justify-content-evenly">
                            <div class="col-5 accountBox d-flex flex-column justify-content-center pb-3" >
                                <div class="d-flex align-items-center justify-content-between p-3">
                                    <h2 class="me-3"> ACCOUNT INFORMATIONS</h2>
                                    <a href="index.php?page=Account&action=Details">Account Details ></a>
                                </div>
                                <?php foreach($accountInfos as $accountInfo){ ?>
                                    <table>
                                        <tr>
                                            <td class="p-2">Name</td>
                                            <td class="p-2 infos"><?= substr($accountInfo['firstname'],0,1)."******".substr($accountInfo['firstname'],(strlen($accountInfo['firstname']))-1,0), 
                                            substr($accountInfo['lastname'],0,1)."******".substr($accountInfo['lastname'],(strlen($accountInfo['lastname']))-1,0) ?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Username</td>
                                            <td class="p-2 infos"><?= $accountInfo['username_customer'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Mail</td>
                                            <td class="p-2 infos"><?=  substr($accountInfo['mail'],0,1)."******".substr($accountInfo['mail'],(strlen($accountInfo['mail']))-11,11)?></td>
                                        </tr>
                                        <tr>
                                            <td class="p-2">Phone</td>
                                            <td class="p-2 infos"><?= $accountInfo['phone_code'] ?><?= substr($accountInfo['phone'],0,1)."******".substr($accountInfo['phone'],(strlen($accountInfo['phone']))-2,2) ?></td>
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
                    </div>
                </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
