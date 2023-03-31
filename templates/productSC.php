<?php $title = "$subCat";?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row p-3 mb" id="titleSCProducts">
        <div class="col-12 d-flex justify-content-center align-items-center"><h1><?= $subCat ?></h1></div>
    </div>
    
    <div class="row d-flex justify-content-evenly">

        <div class="col-11 p-5 d-flex flex-wrap justify-content-evenly" id="productSCPageLeft">
            <?php foreach($products as $product) { ?>
            <div class="card text-left cardProducts mb-5 bg-transparent">
                <a href="index.php/page=product&id=<?= $product['id_products']?>" style="text-decoration:none;"><img src="../admin/<?=$product['path']?>" class="card-img-top" alt="Product Picture">
                <div class="card-body">
                    <i class="fa-solid fa-cart-shopping ms-2 p-2" style="color: #ffffff;float:right;"></i><i class="fa-solid fa-plus p-2 ms-1" style="color: #ffffff;float:right;"></i>
                    <h3 class="card-title cardTitleProducts"><?=$product['name_products']?></h3>
                    <p class="card-text mb-2 cardPrice">$<?=$product['price']?></p></a>
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
    <div class="row m-5 p-5 text-center d-flex justify-content-center" id="ourAdvice">
            <div class="col-12 mb-5" id="titleAdvice">
            <h2 class="p-4 mb-4 text-center">Our Advice for Stick Incense</h2>
            </div>
            <div class="col-12">
                <div class="row d-flex justify-content-evenly ">
                    <div class="col-5 advice mb-5 p-3 d-flex flex-column align-items-center">
                        <h2>Cleansing & Meditation</h2>
                            <h3>Pine & Cedar</h3>
                            <p>These conifers are both useful for cleansing as well as creating sacred spaces.
                            They are linked to the oxygenation of our planet, and are powerfully purifying and grounding. 
                            Picture the mist that hovers over the Pacific Rainforest, the moisture that gathers on the canopy 
                            and slips down the trees, filters through the Earth and recollects itself on its way out to sea. 
                            Call upon the cleansing power of that process and let all that does not serve you be washed away.</p>

                            <h3>Lavender & Rosemary</h3>
                            <p>This may be the most powerful meditation duo in existence. Lavender is the ultimate soother 
                            of stress and calmer of nerves, and rosemary is a cognitive stimulant known to improve focus!</p>
                    </div>
                    <div class="col-5 advice mb-5 p-3 d-flex flex-column align-items-center">
                        <h2>Divination</h2>
                            <h3>Star Anise</h3>
                            <p>Next time you pull out your pendulum, light a stick of Green Fairy before you begin. 
                            Star anise has a history of being used not only to enhance psychic abilities, but also 
                            to ward off evil, misfortune, and negative energy.</p>

                            <h3>Lavender & Rosemary</h3>
                            <p>Mind-sharpening rosemary and anxiety-calming lavender make excellent companions for 
                            any tarot reading or consultation of the runes! Allow these garden favorites to work 
                            their mental acuity magic so you’re operating at your full capacity.</p>
                    </div>
                    <div class="col-5 advice p-3 d-flex flex-column align-items-center">
                        <h2>Spirit Work</h2>
                            <h3>Star Anise</h3>
                            <p>These dark, celestial buds evoke the fabled Green Fairy and have an association with 
                            a thinning of the veil between worlds. They can be used to enhance a medium’s perception, 
                            and as an invitation for spirits to make contact. They also ward off evil, and can be used 
                            for protection while engaging with the spirit world.</p>

                            <h3>Cinnamon, Clove & Orange</h3>
                            <p>Cinnamon for strength, clove to clear your head, and orange to be a beacon of love and light in 
                            the darkness. Doing spirit work while burning this blend is like carrying an enchanted torch through 
                            the underworld with you, or leaving a candle burning in your window so your loved one can find their 
                            way home in the dark.</p>
                    </div>
                    <div class="col-5 advice p-3 d-flex flex-column align-items-center">
                        <h2>Shadow Work</h2>
                            <h3>Cinnamon, Clove & Orange</h3>
                            <p>When you’re ready to shine the light from that torch inward, you’ll find its flicker remains an empowering 
                            companion. Facing our shadow selves and doing the hard work to heal calls for some solid spiritual support, 
                            and you can find it in this fiery combination that promotes strength and alertness. It’s a warmly comforting 
                            and disarmingly intimate blend, with optimistic citrus against darkly sinister spices.</p>

                            <h3>Orange, Pink Grapefruit, Lavender & Patchouli</h3>
                            <p>Create a safe space to do this delicate, complex work with yourself. Calm and center with lavender, prepare 
                            to go deep and get intimate with patchouli, and illuminate all your darkest corners with bright, warm citrus.</p>
                    </div>
                </div>
            </div>
    </div>    
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>