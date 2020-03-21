/* MOSTRAR ENLACES */
function showMenu() {
    var x = document.getElementById("menuA");
    if (x.className === "menuA") {
        x.className += " showMenu";
    } else {
        x.className = "menuA";
    }
}