let btn = document.getElementById('button');
const regexp = new RegExp("[0-9]{1}[A-Z]{1}");
btn.addEventListener('click', function () {
    var cls = document.getElementById("sqlclass").value;
    if (regexp.test(cls)) {
        console.log("poprawnie");
    } else {
        alert("Nieprawidłowy format. Wpisz numer klasy i literę alfabetu");
    }
})