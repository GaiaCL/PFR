<?php $title ="$catNC"; ?>
<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row p-3" id="titleProducts">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center"><h1><?= $catNC ?></h1><p><?= $catD ?></p></div>
    </div>
    <div class="row p-4">
        
    </div>
    <div class="row d-flex justify-content-evenly mb-5">
        
       <div class="col-9 p-5 d-flex flex-wrap justify-content-evenly" id="productPageLeft">
        <div class="col-12 d-flex mb-5">
            <button onclick="filter()" class="filterBtn" >FILTER +</button>
            <div class="dropdown ms-2 " >
            <button class="btn btn-secondary dropdown-toggle filterBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background:wheat;color:#36395A;">
                SORT BY
            </button>
            <ul class="dropdown-menu filterMenu">
                <li><a class="dropdown-item" href="index.php?page=Product&id=<?= $_GET['id'] ?>&orderby=AZ">Alphabetically, A-Z</a></li>
                <li><a class="dropdown-item" href="index.php?page=Product&id=<?= $_GET['id'] ?>&orderby=ZA">Alphabetically, Z-A</a></li>
                <li><a class="dropdown-item" href="index.php?page=Product&id=<?= $_GET['id'] ?>&orderby=LH">Price, low to high</a></li>
                <li><a class="dropdown-item" href="index.php?page=Product&id=<?= $_GET['id'] ?>&orderby=HL">Price, high to low</a></li>
            </ul>
            </div>
        </div>
        <div class="col-10 subCategorie mb-3 pt-3" id="filterSC">
                <?php foreach($subCats as $subCat){?>
                    <a href="index.php?page=productSC&id=<?= $subCat['scid'] ?>"><?= $subCat['nsc']?></a>
                <?php } ?>
            </div>
            <?php foreach($products as $product) { ?>
            <div class="card text-left cardProducts mb-5 bg-transparent">
                <a href="index.php/page=Detail&id=<?= $product['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$product['path']?>" class="card-img-top" alt="Product Picture"></a>
                <div class="card-body">
                <form action="../src/controllers/addCart.php" method="POST">
                    <input type="hidden" value="<?= $product['id'] ?>" name="id_product">  
                    <input type="hidden" value="<?= $_GET['id'] ?>" name="id_cat">                  
                    <button type="submit" name="addCart" style="background:none;border:none;"><i class="fa-solid fa-plus p-2 ms-1 buttonProducts"></i></button>     
                </form>               
                <h3 class="card-title cardTitleProducts"><?=$product['name_products']?></h3>
                    <p class="card-text  cardPrice">$<?=$product['price']?></p>
                    
                </div>
            </div>
            <?php }?>
            <?php if(!isset($_GET['orderby'])){ ?>
                <div class="col-12 d-flex justify-content-center">
                        <ul class="paginationLi d-flex align-items-center">
                            <li class="pageItem <?= ($currentPage == 1) ? "disabled" : "" ?> m-2 ">
                                <a href="?page=Product&id=<?= $_GET['id']?>&pagenb=<?= ($currentPage == 1) ? $currentPage :$currentPage - 1 ?>" class="page-link pagin pag p-2">Précédente</a>
                            </li>
                            <li>
                                <div class="cont p-2 pagin "><?= (isset($_GET['pagenb'])) ? $_GET['pagenb'] : 1 ?><div>
                            </li>
                            <li class="pageItem <?= ($currentPage == $pages) ? "disabled" : "" ?> m-2">
                            <a href="?page=Product&id=<?= $_GET['id']?>&pagenb=<?= ($currentPage == $pages) ? $currentPage : $currentPage + 1 ?>" class="page-link pagin pag p-2">Suivante</a>
                            </li>
                        </ul>
                    </div>
                <?php } else {?>
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="paginationLi d-flex align-items-center">
                            <li class="pageItem <?= ($currentPage == 1) ? "disabled" : "" ?> m-2 ">
                                <a href="?page=Product&id=<?= $_GET['id']?>&pagenb=<?= ($currentPage == 1) ? $currentPage :$currentPage - 1 ?>&orderby=<?= $_GET['orderby'] ?>" class="page-link pagin pag p-2">Précédente</a>
                            </li>
                            <li>
                                <div class="cont p-2 pagin "><?= (isset($_GET['pagenb'])) ? $_GET['pagenb'] : 1 ?><div>
                            </li>
                            <li class="pageItem <?= ($currentPage == $pages) ? "disabled" : "" ?> m-2">
                            <a href="?page=Product&id=<?= $_GET['id']?>&pagenb=<?= ($currentPage == $pages) ? $currentPage : $currentPage + 1 ?>&orderby=<?= $_GET['orderby'] ?>" class="page-link pagin pag p-2">Suivante</a>
                            </li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
        <div class="col-3" id="productPageRight">
            <h2 class="m-3 text-center">New Products </h2>
            <?php foreach ($newProducts as $newProduct){ ?>
                <a href="">
                    <div class="col newProduct d-flex flex-column justify-content-center align-items-center m-3 p-3">
                        <img src="../admin/<?=$newProduct['path']?>" alt="">
                        <h3 class="mt-2 text-center"><?=$product['name_products']?></h3>
                        <p>$<?=$product['price']?></p>
                    </div>
                </a>
            <?php } ?>
        </div> 
    </div>    
</div>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>