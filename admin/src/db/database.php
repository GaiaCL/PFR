<?php
$db  = new PDO(
    'mysql:host=localhost;dbname=magicbox;charset=utf8',
    'root',
    ''
);
if($db === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}