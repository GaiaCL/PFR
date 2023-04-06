<?php $title = "$subCategorie";?>

<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row p-3 mb" id="titleSCProducts">
        <div class="col-12 d-flex justify-content-center align-items-center"><h1><?= $subCategorie ?></h1></div>
    </div>
    
    <div class="row d-flex justify-content-evenly">

        <div class="col-9 p-5 d-flex flex-wrap justify-content-evenly mb-5" id="productSCPageLeft">
        <div class="col-12 d-flex mb-5">
            <div class="dropdown ms-2 " >
            <button class="btn btn-secondary dropdown-toggle filterBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background:wheat;color:#36395A;">
                SORT BY
            </button>
            <ul class="dropdown-menu filterMenu">
                <li><a class="dropdown-item" href="index.php?page=productSC&id=<?= $_GET['id'] ?>&orderby=AZ">Alphabetically, A-Z</a></li>
                <li><a class="dropdown-item" href="index.php?page=productSC&id=<?= $_GET['id'] ?>&orderby=ZA">Alphabetically, Z-A</a></li>
                <li><a class="dropdown-item" href="index.php?page=productSC&id=<?= $_GET['id'] ?>&orderby=LH">Price, low to high</a></li>
                <li><a class="dropdown-item" href="index.php?page=productSC&id=<?= $_GET['id'] ?>&orderby=HL">Price, high to low</a></li>
            </ul>
            </div>
        </div>
            <?php foreach($products as $product) { ?>
            <div class="card text-left cardProducts mb-5 bg-transparent">
                <a href="index.php/page=product&id=<?= $product['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$product['path']?>" class="card-img-top" alt="Product Picture"></a>
                <div class="card-body">
                    <a href=""><i class="fa-solid fa-cart-shopping ms-2 p-2 buttonProducts"></i></a><a href="" ><i class="fa-solid fa-plus p-2 ms-1 buttonProducts"></i></a>
                    <h3 class="card-title cardTitleProducts"><?=$product['name_products']?></h3>
                    <p class="card-text mb-2 cardPrice">$<?=$product['price']?></p>
                </div>
            </div>
            <?php }?>
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="paginationLi d-flex align-items-center">
                            <li class="pageItem <?= ($currentPage == 1) ? "disabled" : "" ?> m-2 ">
                                <a href="?page=productSC&id=<?= $_GET['id']?>&pagenb=<?= ($currentPage == 1) ? $currentPage :$currentPage - 1 ?>" class="page-link pagin pag p-2">Précédente</a>
                            </li>
                            <li>
                                <div class="cont p-2 pagin "><?= (isset($_GET['pagenb'])) ? $_GET['pagenb'] : 1 ?><div>
                            </li>
                            <li class="pageItem <?= ($currentPage == $pages) ? "disabled" : "" ?> m-2">
                            <a href="?page=productSC&id=<?= $_GET['id']?>&pagenb=<?= ($currentPage == $pages) ? $currentPage : $currentPage + 1 ?>" class="page-link pagin pag p-2">Suivante</a>
                            </li>
                        </ul>
                    </div>
                </div>
    </div> 
    
    <div class="row d-flex justify-content-center align-items-center mb-5">
        <div class="col-9 desc">
            <h2 class="mb-5">About our <?= $subCategorie ?></h2>
            <p ><?= $desc ?></p></div>
        </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>