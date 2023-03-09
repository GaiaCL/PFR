function someProducts(){
    document.getElementById("newProducts").style.background = "rgb(48, 74, 139)";
    document.getElementById("someProducts").style.background = "rgb(25, 54, 118)";
    document.getElementById("someItems").style.display = "flex";
    document.getElementById("newItems").style.display = "none";
}

function newProducts() {
    document.getElementById("newProducts").style.background = "rgb(25, 54, 118)";
    document.getElementById("someProducts").style.background = "rgb(48, 74, 139)";
    document.getElementById("someItems").style.display = "none";
    document.getElementById("newItems").style.display = "flex";
}