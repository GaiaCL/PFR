<?php 
function insertPictures() {
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
    else {
        $msgSend ='';
        $screenshot ='';
    }
    return [$msgSend, $screenshot];
    }
    function selectProducts(){
        $sqlQuery = 'SELECT * FROM `products`';
        $ProdStatement = dbConnect()->prepare($sqlQuery);
        $ProdStatement->execute();
        $Products = $ProdStatement->fetchAll();
        return $Products;
    }
    function selectPicture($path){
        $query = "SELECT id FROM `pictures` WHERE path = :path";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':path', $path, PDO::PARAM_INT);
        $req->execute();
        $idPicture = $req-> fetch();
        return $idPicture[0];   
    }

    function insertIllustrateTable($idPicture){
            $selectProducts = $_POST['Prod'];    
            var_dump($idPicture);
                    $querySec = "INSERT INTO `illustrate_products` (id_products, id_pictures)
                    VALUES (:id_products, :id_pictures)";
                    $reqs = dbConnect()->prepare($querySec);
                    $reqs->bindValue(':id_pictures', $idPicture, PDO::PARAM_INT);
                    $reqs->bindValue(':id_products', $selectProducts, PDO::PARAM_INT);
                    $reqs->execute();
                  
            }
        
    
   