<?php 

function receptionContact(){

    if(!isset($_POST['mail']) || !isset($_POST['lastname']) || !isset($_POST['firstname']) || !isset($_POST['question'])){
        if(isset($_POST['send'])){
        $msg = "<h2 class='text-danger'>You must fill all the informations before sending your Message. </h2>";
        return $msg;
        } else if(!isset($_POST['send'])){
            $msg ='';
            return $msg;
        }
    } else if(isset($_POST['mail']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['question'])){
        $mail = strip_tags(htmlspecialchars($_POST['mail']));
        $lastName = strip_tags(htmlspecialchars($_POST['lastname']));
        $firstName = strip_tags(htmlspecialchars($_POST['firstname']));
        $question = strip_tags(htmlspecialchars($_POST['question']));
        
        if(empty($mail) || empty($lastName) || empty($firstName) || empty($question)){
            $msg = "<h2 class='text-danger'>You must fill all the informations before sending your Message. </h2>";
            return $msg;
        } else {
            $stmt = dbConnect()->prepare("INSERT INTO `contact` (mail, lastname, firstname, question)
                VALUES (:mail, :lastname, :firstname, :question )");
            $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
            $stmt->bindValue(":lastname", $lastName, PDO::PARAM_STR);
            $stmt->bindValue(":firstname", $firstName, PDO::PARAM_STR);
            $stmt->bindValue(":question", $question, PDO::PARAM_STR);
            $stmt->execute();
            $msg = "<h2 class='contactMsg'>Thank you for your message! <a href=''>Click Here</a> to return to the Homepage! </h2>";
            return $msg;
        }        
    }
} 