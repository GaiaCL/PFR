<?php 
$msgSend="";
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0 && isset($_POST['description'])) {
    if ($_FILES['image']['size'] <= 1000000) {
    
        $fileInfo = pathinfo($_FILES['image']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (in_array($extension, $allowedExtensions)) {
    
            move_uploaded_file($_FILES['image']['tmp_name'], '../src/assets/pictures/' . basename($_FILES['image']['name']));
            $screenshot = '../src/assets/pictures/' . basename($_FILES['image']['name']);
            $description = strip_tags($_POST['description']);
            $msgSend = "L'envoi a bien été effectué !";
             $query = 'INSERT INTO pictures(name,description,path) VALUES (:name,:description,:path)';
            $req = dbConnect()->prepare($query);
            $req->bindValue(':name', basename($_FILES['image']['name']), PDO::PARAM_STR);
            $req->bindValue(':description', $description, PDO::PARAM_STR);
            $req->bindValue(':path',$screenshot , PDO::PARAM_STR);
            
     
     
            $req->execute();
        }}}