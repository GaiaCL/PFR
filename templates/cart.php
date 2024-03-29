<?php $title = "Cart" ?>
<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row p-3" id="titleCart">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h1>Shopping Cart</h1>
        </div>
    </div>
    <div class="row">
        <section class="h-100 gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-md-8">
                        <div class="card mb-4 cardCart d-flex flex-column justify-content-center align-items-center">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Cart - <?= $totalItems ?> items</h5>
                            </div>

                            <?php foreach ($cartProducts as $cartProduct) { ?>
                                <div class="card-body cardProduct mb-3 p-3">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                                <img src="../admin/<?= $cartProduct['path'] ?>" class="w-100 productImg" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong><?= $cartProduct['name_products'] ?></strong></p>
                                            <a href="index.php?page=Cart&idCart=<?= $cartProduct['id_cart'] ?>" data-id="<?= $cartProduct['id_cart'] ?>"><button type="button" class="btn btn-dark btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                                    <i class="fas fa-trash"></i>
                                                </button></a>
        
                                        </div>

                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <!-- Quantity -->
                                            <div class="d-flex mb-4" style="max-width: 300px">
                                                <button class="btn btn-dark px-3 me-2 minus" data-id="<?= $cartProduct['id_cart'] ?>" data-quantity="<?= $cartProduct['quantity'] ?>">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <div class="form-outline d-flex flex-column">
                                                    <span class="quantity" id="<?= $cartProduct['id_cart'] ?>"> <?= $cartProduct['quantity'] ?></span>
                                                    <label class="form-label" for="form1">Quantity</label>
                                                </div>

                                                <button class="btn btn-dark px-3 ms-2 plus" data-id="<?= $cartProduct['id_cart'] ?>" data-quantity="<?= $cartProduct['quantity'] ?>">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- Quantity -->

                                            <!-- Price -->
                                            <p class="text-start text-md-center">
                                                <strong> $<?= $cartProduct['price'] ?></strong>
                                            </p>
                                            <!-- Price -->
                                        </div>
                                    </div>
                                    <!-- Single item -->
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="card mb-4 summary">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body summary">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span id="cartTotalOne">$<?= $totalPrice ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>FREE SHIPPING</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong id="cartTotalTwo">$<?= $totalPrice ?></strong></span>
                                </li>
                            </ul>
                            <form method="POST" action="../src/controllers/sendMail.php" class="d-flex flex-column align-items-center">
                                <textarea name="comment" class="mb-3" placeholder="Leave a comment here..."></textarea>
                                <button type="submit" class=" estimation mb-3">
                                    Estimate a Price
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>