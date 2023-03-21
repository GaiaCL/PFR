<?php 

function loginStmt() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = strip_tags($_POST["username"]);
        $password = strip_tags($_POST["password"]);
        $stmt = dbConnect()->prepare('SELECT * FROM `customers` WHERE username = :username');
        $stmt->bindValue(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();
     
            if(($user['username'] == $username) && (password_verify($password, $user['password'])) ){
                   $username = $user['username'];
                    header("location: index.php?page=Home");
            }
            else {
                $fail = "<h3>Veuillez entrer des informations correctes.</h3>";
            }
        }
}