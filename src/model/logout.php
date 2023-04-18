<?php
    session_start(); 
    unset($_SESSION['username_customer']);
    header("Refresh:0; url=../../public/index.php");