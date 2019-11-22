var fiszki = document.querySelectorAll(".fiszka");
fiszki.forEach(function (fiszka) {
    fiszka.addEventListener("click", function () {
        fiszka.classList.toggle("rotate");
    })
});