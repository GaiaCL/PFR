<?php
function accountSelection()
{
    $msg = "";
    $msgPassword = "";
    $username = $_SESSION['username_customer'];
    $stmt = dbConnect()->prepare('SELECT*FROM customers WHERE username_customer = :username_customer');
    $stmt->bindValue(":username_customer", $username, PDO::PARAM_STR);
    $stmt->execute();
    $accountInfos = $stmt->fetch();
    $password = $accountInfos['password'];
    $id = $accountInfos['id'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if ($action == "updatePersonnal") {
            if (!empty($_POST['username_customer']) && isset($_POST['username_customer'])) {
                $username = stripslashes(htmlspecialchars($_POST['username_customer']));
                var_dump($username);
                if (isset($_POST['valider'])) {
                    $query = "UPDATE customers SET username_customer = :username_customer  WHERE id = :id";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                    $idsStatement->bindValue(':username_customer', $username, PDO::PARAM_STR);
                    $idsStatement->execute();
                    $_SESSION['username_customer'] = $username;
                    header("location: index.php?page=Account&action=details");
                } else {
                    $msg = "<h3 class='text-danger'>You must enter valid Informations.</h3>";
                }
            }
        } elseif ($action == "updatePassword") {
            if (empty($_POST['passwordVerify']) && empty($_POST['newPassword']) && empty($_POST['newPasswordVerify']) && isset($_POST['passwordVerify'], $_POST['newPassword'], $_POST['newPasswordVerify'])) {
            } else if (!empty($_POST['passwordVerify']) && !empty($_POST['newPassword']) && !empty($_POST['newPasswordVerify']) && isset($_POST['passwordVerify'], $_POST['newPassword'], $_POST['newPasswordVerify'])) {
                if (password_verify($_POST['passwordVerify'], $password)) {
                    $passwordVerify = stripslashes(htmlspecialchars($_POST['passwordVerify']));
                    if ($passwordVerify == $_POST['newPassword']) {
                        $msgPassword = "<h3 class='text-danger'>Your old and new passwords must be different.</h3>";
                    } else if ($_POST['newPassword'] !== $_POST['newPasswordVerify']) {
                        $msg = "<h3 class='text-danger'>Your new password doesn't match.</h3>";
                    } else if ($_POST['newPassword'] == $_POST['newPasswordVerify'] && $passwordVerify !== $_POST['newPassword']) {
                        if (isset($_POST['valider'])) {
                            $newPassword = stripslashes(htmlspecialchars(password_hash($_POST['newPassword'], PASSWORD_DEFAULT)));
                            $query = "UPDATE customers SET password = :password  WHERE id = :id";
                            $idsStatement = dbConnect()->prepare($query);
                            $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                            $idsStatement->bindValue(':password', $newPassword, PDO::PARAM_STR);
                            $idsStatement->execute();
                            header("location: index.php?page=Account&action=details");
                        }
                    }
                } else {
                    $msgPassword = "<h3 class='text-danger'>Your actual password is not correct.</h3>";
                }
            }
        } elseif ($action == "updateMail") {
            if (!empty($_POST['mail']) && isset($_POST['mail'])) {
                $mail = stripslashes(htmlspecialchars($_POST['mail']));
                if (isset($_POST['valider']) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $query = "UPDATE customers SET mail = :mail  WHERE id = :id";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                    $idsStatement->bindValue(':mail', $mail, PDO::PARAM_STR);
                    $idsStatement->execute();
                    header("location: index.php?page=Account&action=details");
                } else {
                    $msg = "<h3 class='text-danger'>You must enter valid Informations.</h3>";
                }
            }
        } elseif ($action == "updatePhone") {
            if (!empty($_POST['phone']) && isset($_POST['phone'])) {
                $phone = stripslashes(htmlspecialchars($_POST['phone']));
                if (isset($_POST['valider'])) {
                    $query = "UPDATE customers SET phone = :phone  WHERE id = :id";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                    $idsStatement->bindValue(':phone', $phone, PDO::PARAM_INT);
                    $idsStatement->execute();
                    header("location: index.php?page=Account&action=details");
                } else {
                    $msg = "<h3 class='text-danger'>You must enter valid Informations.</h3>";
                }
            }
        } elseif ($action == "updateAdress") {
            if (!empty($_POST['adress']) && !empty($_POST['zipcode']) && !empty($_POST['city']) && isset($_POST['adress'], $_POST['zipcode'], $_POST['city'])) {
                $adress = stripslashes(htmlspecialchars($_POST['adress']));
                $zipcode = stripslashes(htmlspecialchars($_POST['zipcode']));
                $city = stripslashes(htmlspecialchars($_POST['city']));
                if (isset($_POST['valider'])) {
                    $query = "UPDATE customers SET adress = :adress, zipcode = :zipcode, city = :city  WHERE id = :id";
                    $idsStatement = dbConnect()->prepare($query);
                    $idsStatement->bindValue(':id', $id, PDO::PARAM_INT);
                    $idsStatement->bindValue(':adress', $adress, PDO::PARAM_STR);
                    $idsStatement->bindValue(':zipcode', $zipcode, PDO::PARAM_STR);
                    $idsStatement->bindValue(':city', $city, PDO::PARAM_STR);
                    $idsStatement->execute();
                    header("location: index.php?page=Account&action=details");
                } else {
                    $msg = "<h3 class='text-danger'>You must enter valid Informations.</h3>";
                }
            }
        }

        return [$accountInfos, $msg, $msgPassword];
    }
}