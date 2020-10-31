var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            this.getElementsByClassName("dropStatus")[0].innerHTML = "+";
            panel.style.display = "none";
        } else {
            this.getElementsByClassName("dropStatus")[0].innerHTML = "-";
            panel.style.display = "block";
        }
    });
}
