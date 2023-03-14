<?php $title = "$subCat";?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row p-3 mb-5" id="titleSCProducts">
        <div class="col-4 d-flex justify-content-end align-items-center"><img src="../src/assets/images/sageleft.webp" alt="Sage Left Side"></div>
        <div class="col-4 d-flex justify-content-center align-items-center"><h1><?= $subCat ?></h1></div>
        <div class="col-4 d-flex justify-content-start align-items-center"><img src="../src/assets/images/sageright.webp" alt="Sage Right Side"></div>
    </div>
    
    <div class="row d-flex justify-content-evenly">

        <div class="col-9 p-5 d-flex flex-wrap justify-content-evenly" id="productSCPageLeft">
            <?php foreach($products as $product) { ?>
            <div class="card text-center cardProducts mb-5">
                <a href="index.php/page=product&id=<?= $product['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$product['path']?>" class="card-img-top" alt="Product Picture">
                <div class="card-body">
                    <h3 class="card-title cardTitleProducts"><?=$product['name_products']?></h3>
                    <p class="card-text mb-2 cardPrice">$<?=$product['price']?></p></a>
                    <a href="" class="btn buttonBuy">Buy Now</a>
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
    <div class="row m-5 p-5" id="moreAboutSC">
            <div class="col-4">
            <h2 class="p-4 mb-4 text-center">More about Incense & Plants</h2>
            </div>
            <div class="col-8 d-flex justify-content-center align-items-center">
                <img src="../src/assets/images/border.webp" alt="Gold Border More Infos">
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