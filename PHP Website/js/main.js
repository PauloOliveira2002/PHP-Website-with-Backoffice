function darkMode() {
    if (
        document.getElementById("darkMode").innerHTML == '<i class="bi bi-circle-fill"></i>') {
        document.body.style.backgroundColor = "grey";
        document.body.style.color = "white";
        document.getElementById("darkMode").innerHTML = '<i class="bi bi-circle style bg-light rounded-circle" ></i>';
    } else {
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
        document.getElementById("darkMode").innerHTML = '<i  class="bi bi-circle-fill"></i>';
    }
}