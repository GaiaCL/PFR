function updateCartTotal() {

    $.ajax({
        url: "../src/assets/AJAX/cartTotal.php",
        type: "GET",
        data: {
            action: "get_total_price"
        },
        dataType: "json",
        success: function(response) {

            const cartBadgeOne = document.getElementById("cartTotalOne");
            const cartBadgeTwo = document.getElementById("cartTotalTwo");
            cartBadgeOne.innerHTML = "$" + response;
            cartBadgeTwo.innerHTML = "$" + response;
           
            
        },
        
    });
}


$(document).ready(function() {

    $(".minus").on("click", function() {
        var productId = $(this).data("id");
        var currentQuantity = $(this).data("quantity");
        var quantityC = document.getElementById(productId);
        if(currentQuantity <= 1){
            $.ajax({
                url: "../src/assets/AJAX/buttonCart.php",
                type: "GET",
                data: {id: productId, quantity: 1},
                success: function(response) {
                    $(".quantity[data-id='" + productId + "']").text(response);
                    quantityC.innerHTML = response;
                    $(".plus[data-id='" + productId + "']").data("quantity", response);
                    $(".minus[data-id='" + productId + "']").data("quantity", response);
                    updateCartCount();
                    updateCartTotal();
                    updateCartNav();
                }
                }
            );
        }
        else {
        $.ajax({
            url: "../src/assets/AJAX/buttonCart.php",
            type: "GET",
            data: {id: productId, quantity: currentQuantity - 1},
            success: function(response) {
                $(".quantity[data-id='" + productId + "']").text(response);
                quantityC.innerHTML = response;
                $(".plus[data-id='" + productId + "']").data("quantity", response);
                $(".minus[data-id='" + productId + "']").data("quantity", response);
                updateCartCount();
                updateCartTotal();
                updateCartNav();
            }
            }
        );
    }});

    $(".plus").on("click", function() {
        var productId = $(this).data("id");
        var currentQuantity = parseInt($(this).data("quantity"));
        var quantityC = document.getElementById(productId);
        
        $.ajax({
            url: "../src/assets/AJAX/buttonCart.php",
            type: "GET",
            data: {id: productId, quantity: currentQuantity + 1},
            success: function(response) {
                $(".quantity[data-id='" + productId + "']").text(response);
                quantityC.innerHTML = response;
                $(".plus[data-id='" + productId + "']").data("quantity", response);
                $(".minus[data-id='" + productId + "']").data("quantity", response);
                updateCartCount();
                updateCartTotal();
                updateCartNav();
            }
            }
        );
    });
});


