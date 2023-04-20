<?php

session_start();

require('../model/sendMail.php');
require('../db/database.php');
require('../model/cartVue.php');

if (isset($_SESSION['username_customer'])) {
    createOrder();
    unset($_SESSION['ident_customer']);
    header('location:../../public/index.php?page=Cart');
} else {
    header('location:../../public/index.php?page=Cart');
}
