<?php $title = "My Account";?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
        <ul class="nav flex-column" id="navAccount">
            <li class="nav-item">
                <p class="nav-link" onclick="resume()">Account Resume</p>
            </li>
            <li class="nav-item">
                <p class="nav-link" onclick="details()">Account Details</p>
            </li>
            <li class="nav-item">
                <p class="nav-link" onclick="bInfos()">Billing Informations</p>
            </li>
            <li class="nav-item">
                <p class="nav-link" onclick="oHistory()">Orders History</p>
            </li>
        </ul>
        </div>
        <div class="col" id="accountResult">
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
