function updateCartCount() {

    $.ajax({
        url: "../src/assets/AJAX/counterCart.php",
        type: "GET",
        data: {
            action: "get_total_quantity"
        },
        dataType: "json",
        success: function(response) {

            const cartBadge = document.getElementById("cartCount");
            cartBadge.innerHTML = response.totalQuantity;
           
        },
        
    });
}

function updateCartNav() {

    $.ajax({
        url: "../src/assets/AJAX/cartTotal.php",
        type: "GET",
        data: {
            action: "get_total_nav"
        },
        dataType: "json",
        success: function(response) {
           
            const cartBadgeNavOne = document.getElementById("priceNavOne");
            const cartBadgeNavTwo = document.getElementById("priceNavTwo");
            cartBadgeNavOne.innerHTML = "$" + response;
            cartBadgeNavTwo.innerHTML = "$" + response;
           
        },
        
    });
}

window.onload = function() {
    updateCartCount();
    updateCartNav();
}
