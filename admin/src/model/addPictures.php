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
            $screenshot = 'src/assets/pictures/' . basename($_FILES['image']['name']);
            $description = strip_tags($_POST['description']);
            $name = time();
            $msgSend = "L'envoi a bien été effectué !";
             $query = 'INSERT INTO pictures(name_pictures,description,path) VALUES (:name_pictures,:description,:path)';
            $stmt = dbConnect()->prepare($query);
            $stmt->bindValue(':name_pictures', $name, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':path',$screenshot , PDO::PARAM_STR);
            
     
     
            $stmt->execute();
        }}}
    else {
        $msgSend ='';
        $name ='';
    }
    return [$msgSend, $name];
    }
    function selectProducts(){
        $sqlQuery = 'SELECT * FROM `products`';
        $ProdStatement = dbConnect()->prepare($sqlQuery);
        $ProdStatement->execute();
        $Products = $ProdStatement->fetchAll();
        return $Products;
    }
    function selectPicture($name){
        $query = "SELECT id FROM `pictures` WHERE name_pictures = :name_pictures";
        $stmt = dbConnect()->prepare($query);
        $stmt->bindValue(':name_pictures', $name, PDO::PARAM_INT);
        $stmt->execute();
        $idPicture = $stmt-> fetch();
        return $idPicture[0];   
    }

    function insertIllustrateTable($idPicture){
            $selectProducts = $_POST['Prod'];    
            var_dump($idPicture);
                    $querySec = "INSERT INTO `illustrate_products` (id_products, id_pictures)
                    VALUES (:id_products, :id_pictures)";
                    $stmts = dbConnect()->prepare($querySec);
                    $stmts->bindValue(':id_pictures', $idPicture, PDO::PARAM_INT);
                    $stmts->bindValue(':id_products', $selectProducts, PDO::PARAM_INT);
                    $stmts->execute();
                  
            }
        
    
   