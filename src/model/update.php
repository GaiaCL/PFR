<?php 
function accountSelection(){
    $username = $_SESSION['username_customer'];
    $stmt = dbConnect()->prepare('SELECT*FROM customers WHERE username_customer = :username_customer');
    $stmt->bindValue(":username_customer", $username, PDO::PARAM_STR);
    $stmt->execute();
    $accountInfos = $stmt->fetch();
    $password = $accountInfos['password'];
    $lastname = $accountInfos['lastname'];
    if(isset($_GET['action'])){
            $action = $_GET['action']; 
            if($action == "updatePersonnal"){
            if(isset($_POST['valider'])){
             if(!empty($_POST['username_customer']) && isset($_POST['username_customer'])){
                $username = stripslashes(htmlspecialchars($_POST['username_customer']));
                    $query = "UPDATE customers SET username_customer = :username_customer  WHERE lastname = ".$lastname."";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':username_customer', $username, PDO::PARAM_STR);
                    $idsStatement->execute();
                    header("location:index.php?page=Account&action=details");
                }
             }else {
                $msg = "You must enter valid Informations.";
             }
           } else if($action == "updatePassword"){
            if(isset($_POST['valider'])){
            if(!empty($_POST['passwordVerify'] && $_POST['newPassword'] && $_POST['newPasswordVerify']) && isset($_POST['passwordVerify'], $_POST['newPassword'], $_POST['newPasswordVerify']) && password_verify($_POST['passwordVerify'], $password)){
                $passwordVerify = stripslashes(htmlspecialchars($password));
                if($_POST['newPassword'] == $_POST['newPasswordVerify'] && $passwordVerify !== $_POST['newPassword']){
                $newPassword = stripslashes(htmlspecialchars(password_hash($_POST['newPassword'], PASSWORD_DEFAULT)));
                        $query = "UPDATE customers SET password = :password  WHERE lastname = ".$lastname."";
                        $idsStatement = dbConnect()->prepare($query);
                        $idsStatement->bindValue(':password', $newPassword, PDO::PARAM_STR);
                        $idsStatement->execute();
                        header("location:index.php?page=Account&action=details");
                    }
                }
                else {
                    $msgPassword = "Your previous password is not correct.";
                }
             }else {
                $msg = "You must enter valid Informations.";
             }
           } else if($action == "updateMail"){
            if(isset($_POST['valider'])){
            if(!empty($_POST['mail']) && isset($_POST['mail'])){
                $mail = stripslashes(htmlspecialchars($_POST['mail']));
                    $query = "UPDATE customers SET mail = :mail  WHERE lastname = ".$lastname."";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':mail', $mail, PDO::PARAM_STR);
                    $idsStatement->execute();
                    header("location:index.php?page=Account&action=details");
                }
             }else {
                $msg = "You must enter valid Informations.";
             }     
           } else if($action == "updatePhone"){ 
            if(isset($_POST['valider'])){
            if(!empty($_POST['phone']) && isset($_POST['phone'])){
                $phone = stripslashes(htmlspecialchars($_POST['phone']));
                    $query = "UPDATE customers SET phone = :phone  WHERE lastname = ".$lastname."";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':phone', $phone, PDO::PARAM_INT);
                    $idsStatement->execute();
                    header("location:index.php?page=Account&action=details");
                }
             }else {
                $msg = "You must enter valid Informations.";
             }  
           }  else if($action == "updateAdress"){ 
            if(isset($_POST['valider'])){
            if(!empty($_POST['adress'] && $_POST['zipcode'] && $_POST['city']) && isset($_POST['adress'], $_POST['zipcode'], $_POST['city'])){
                $adress = stripslashes(htmlspecialchars($_POST['adress']));
                $zipcode = stripslashes(htmlspecialchars($_POST['zipcode']));
                $city = stripslashes(htmlspecialchars($_POST['city']));
                    $query = "UPDATE customers SET adress = :adress, zipcode = :zipcode, city = :city  WHERE lastname = ".$lastname."";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':adress', $adress, PDO::PARAM_STR);
                    $idsStatement->bindValue(':zipcode', $zipcode, PDO::PARAM_STR);
                    $idsStatement->bindValue(':city', $city, PDO::PARAM_STR);
                    $idsStatement->execute();
                    header("location:index.php?page=Account&action=details");
                }
             }else {
                $msg = "You must enter valid Informations.";
             } 
           }
           
       } 
    return $accountInfos;
}