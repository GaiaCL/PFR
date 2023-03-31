<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="../src/assets/css/styleAdmin.css" rel="stylesheet" />
    </head>

    <body>
    <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    
</body>
<div class="l-navbar" id="nav-bar" style="background-color:black;">
        <nav class="nav">
            <div> <a href="index.php?page=homeAdmin" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ADMIN</span> </a>
                <div class="nav_list"> 
                <a href="index.php?page=categories" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Categories</span> </a> 
                <a href="index.php?page=subcategories" class="nav_link"> <i class='bx bxs-grid-alt nav_icon'></i> <span class="nav_name">Sous_Categories</span> </a> 
                <a href="index.php?page=pics" class="nav_link"> <i class='bx bx-image-alt nav_icon'></i> <span class="nav_name">Images</span> </a> 
                <a href="index.php?page=products" class="nav_link"> <i class='bx bxs-shopping-bags nav_icon'></i> <span class="nav_name">Produits</span> </a> 
                <a href="index.php?page=specs" class="nav_link"> <i class='bx bxs-objects-horizontal-right nav_icon' ></i> <span class="nav_name">Specs</span> </a>
                <a href="index.php?page=contact" class="nav_link"> <i class='bx bxs-envelope nav_icon' ></i> <span class="nav_name">Messages Clients</span> </a>
                 
            </div>
            </div> <a href="index.php?page=logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <?= $content ?>
    <script src="../src/assets/JS/javascriptnav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/aeb0ab4057.js" crossorigin="anonymous"></script>

    </body>
</html>
