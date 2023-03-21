<?php
function registerStmt() {
    $pw="";
    if (isset($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['adress'], $_POST['zipcode'], $_POST['city'], $_POST['mail'], $_POST['phone'], $_POST['password'], $_POST['passwordVerify'])) {
        if ($_POST['password'] == $_POST['passwordVerify']){
        $firstname = stripslashes(htmlspecialchars($_POST['firstname']));
        $lastname = stripslashes(htmlspecialchars($_POST['lastname']));
        $username = stripslashes(htmlspecialchars($_POST['username']));
        $adress = stripslashes(htmlspecialchars($_POST['adress']));
        $zipcode = stripslashes(htmlspecialchars($_POST['zipcode']));
        $city = stripslashes(htmlspecialchars($_POST['city']));
        $mail = stripslashes(htmlspecialchars($_POST['mail']));
        $phone = stripslashes(htmlspecialchars($_POST['phone']));
        $password = stripslashes(htmlspecialchars($_POST['password']));

        $stmt = dbConnect()->prepare("INSERT into `customers` (firstname, lastname, username, adress, zipcode, city, mail, phone, password)
              VALUES (:firstname, :lastname, :username, :adress, :zipcode, :city, :mail, :phone, :password)");

                $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
                $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
                $stmt->bindValue(':username', $username, PDO::PARAM_STR);
                $stmt->bindValue(':adress', $adress, PDO::PARAM_STR);
                $stmt->bindValue(':zipcode', $zipcode, PDO::PARAM_INT);
                $stmt->bindValue(':city', $city, PDO::PARAM_STR);
                $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
                $stmt->bindValue(':phone', $phone, PDO::PARAM_INT);
                $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
                $stmt->execute();

                $register =  "<div class='sucess'>
                    <h3>Success registration !</h3>
                    <p>Click here to redirect to the <a href='index.php?page=Home'>Homepage</a></p>
                    </div>";
            }
            else {
                $pw = "Your passwords doesn't match.";
            }
        }
        else if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['adress'], $_POST['zipcode'], $_POST['city'], $_POST['mail'], $_POST['phone'], $_POST['password'], $_POST['passwordVerify'])) {
            if(isset($_POST['submit'])){
            $register = "Complete all the fields.";
            }
            else{
                $register = "";
            }
        }
        return [$pw,$register];
}