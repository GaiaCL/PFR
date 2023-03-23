<?php 

function loginStmt() {
    if(!isset($_SESSION['username'])){
        $isConnected = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = strip_tags($_POST["username"]);
            $password = strip_tags($_POST["password"]);
            $stmt = dbConnect()->prepare('SELECT * FROM `customers` WHERE username = :username');
            $stmt->bindValue(":username", $username, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();
        
                if(($user == true)){
                    $_SESSION['username'] = $username;
                    $fail="<h2 class='text-success fs-4'>Login Success <a href='index.php?page=home' class='text-danger' style='text-decoration:none'>Click here</a> to return to the Homepage.</h2>";
                    return $fail;
                }
                else {
                    $fail = "<h3 class='text-danger fs-5'>Wrong Informations given. Try Again.</h3>";
                    return $fail;
                }
            }
            return $isConnected;
        }
    else {
        $isConnected = true;
        return $isConnected;
    }
}