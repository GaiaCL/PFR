$(document).ready(function() {

    $(".minus").on("click", function() {
        var productId = $(this).data("id");
        var currentQuantity = $(this).data("quantity");

        
        $.ajax({
            url: "../src/assets/AJAX/buttonCart.php",
            type: "POST",
            data: {id: productId, quantity: currentQuantity - 1},
            success: function(response) {
                let quantityC = json.parse(response);
                $(".quantity[data-id='" + productId + "']").text(quantityC);
                
            }
        });
    });

    
    $(".plus").on("click", function() {
        var productId = $(this).data("id");
        var currentQuantity = $(this).data("quantity");

       
        $.ajax({
            url: "../src/assets/AJAX/buttonCart.php",
            type: "POST",
            data: {id: productId, quantity: currentQuantity + 1},
            success: function(response) {
                let quantityC = json.parse(response);
                $(".quantity[data-id='" + productId + "']").text(quantityC);
            }
        });
    });
});