<?php 

function loginStmt() {
    if(!isset($_SESSION['username_customer'])){
        $isConnected = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = strip_tags($_POST["username_customer"]);
            $password = strip_tags($_POST["password_customer"]);
            $stmt = dbConnect()->prepare('SELECT * FROM `customers` WHERE username_customer = :username_customer');
            $stmt->bindValue(":username_customer", $username, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();
        
                if(($user == true)){
                    $_SESSION['username_customer'] = $username;
                    $fail="<h2 class='loginSuccess'>Login Success ! <br> <a href='index.php?page=home' class='clickHere' style='text-decoration:none'>Click here</a> to return to the Homepage.</h2>";
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