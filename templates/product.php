<?php $title ="$catNC"; ?>
<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row p-3" id="titleProducts">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center"><h1><?= $catNC ?></h1><p><?= $catD ?></p></div>
    </div>
    <div class="row p-4">
        <div class="col-12 d-flex justify-content-evenly align-items-center subCategorie">
            <?php foreach($subCats as $subCat){?>
                <a href="index.php?page=productSC&id=<?= $subCat['scid'] ?>"><?= $subCat['nsc']?></a>
            <?php } ?>
        </div>
    </div>
    <div class="row d-flex justify-content-evenly">

       <div class="col-9 p-5 d-flex flex-wrap justify-content-evenly" id="productPageLeft">
            <?php foreach($products as $product) { ?>
            <div class="card text-left cardProducts mb-5 bg-transparent">
                <a href="index.php/page=Detail&id=<?= $product['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$product['path']?>" class="card-img-top" alt="Product Picture">
                <div class="card-body">
                    <i class="fa-solid fa-cart-shopping ms-2 p-2" style="color: #ffffff;float:right;"></i><i class="fa-solid fa-plus p-2" style="color: #ffffff;float:right;"></i>
                    <h3 class="card-title cardTitleProducts"><?=$product['name_products']?></h3>
                    <p class="card-text  cardPrice">$<?=$product['price']?></p></a>
                    
                </div>
            </div>
            <?php }?>
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
    <div class="row m-5 p-5" id="moreAbout">
            <div class="col-12 text-center">
            <h2 class="p-4 mb-4">More about Incense & Plants</h2>
            </div>
            <div class="col-12">
            <p class="p-5 text-center">These are the Magic Box scent selections for cleansing, 
                meditation, divination, spirit work, shadow work, and spellwork. 
                You are welcome to take what resonates and leave what does not! 
                Your practice is yours alone, and it is important that you are autonomous 
                in its execution.

                Using incense in your practice can help you mentally and emotionally prepare 
                for the work you're doing and adds a ceremonial element that echoes back throughout 
                human history. It is often incorporated in spellwork as a representative for the element 
                of air, and customarily burnt as an offering for spirits and deities.
                Remember, you get to decide what works best for you, so take these recommendations with 
                a sprinkle of sea salt and stay true to you! Whenever possible though, keep close to nature and burn raw, 
                dried plant materials or incense made with pure essential oils!</p>
            </div>
    </div>    
</div>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>