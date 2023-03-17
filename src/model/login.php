<?php 

function loginVerification(){
$fail = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$username = strip_tags($_POST["username"]);
$password = strip_tags($_POST["password"]);
$stmt = dbConnect()->prepare('SELECT * FROM `customers` WHERE username = :username');
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch();

    if(($user['username'] == $username) && (password_verify($password, $user['password'])) ){
           $_SESSION['username'] = $username;
    }
    else {
        $fail = "Wrong Informations try again !";
        return $fail;
    }
}
}