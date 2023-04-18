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
window.onload = function() {
    updateCartCount();

};
