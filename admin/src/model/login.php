<?php
function loginStmt(){
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $username = strip_tags($_POST["username"]);
   $password = strip_tags($_POST["password"]);
   $stmt = dbConnect()->prepare('SELECT * FROM `admin` WHERE username = :username');
   $stmt->bindValue(":username", $username, PDO::PARAM_STR);
   $stmt->execute();
   $user = $stmt->fetch();
    $passwordVerify = $user['password'];
       if($user == true && (password_verify($password, $passwordVerify)) ){
              $_SESSION['username'] = $username;
               header("location: index.php?page=homeAdmin");
       }
       else {

            $message = "Error : Wrong Informations given. Try Again.";
            return $message;
       }
       
   }
}