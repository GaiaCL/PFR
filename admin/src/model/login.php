<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $username = strip_tags($_POST["username"]);
   $password = strip_tags($_POST["password"]);
   $stmt = dbConnect()->prepare('SELECT * FROM `admin` WHERE username = :username');
   $stmt->bindValue(":username", $username, PDO::PARAM_STR);
   $stmt->execute();
   $user = $stmt->fetch();

       if(($user['username'] == $username) && (password_verify($password, $user['password'])) ){
              $_SESSION['username'] = $username;
               header("location: index.php?page=homeAdmin");
       }
       else {
           echo "<script language='javascript'>";
           echo "alert('WRONG INFORMATION')";
           echo "</script>";
           header("location: login.php");
       }
   }