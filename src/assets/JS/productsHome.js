function someProducts(){
    document.getElementById("newProducts").style.background = "#304A8B";
    document.getElementById("someProducts").style.background = "#193676";
    document.getElementById("someItems").style.display = "flex";
    document.getElementById("newItems").style.display = "none";
}

function newProducts() {
    document.getElementById("newProducts").style.background = "#193676";
    document.getElementById("someProducts").style.background = "#304A8B";
    document.getElementById("someItems").style.display = "none";
    document.getElementById("newItems").style.display = "flex";
}