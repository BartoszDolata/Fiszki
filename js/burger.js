const hamburger = document.querySelector(".fa-bars");
const arrow = document.querySelector(".fa-angle-double-left");
const column = document.querySelector("aside");
hamburger.addEventListener("click", function () {
    column.classList.toggle("show");
    arrow.classList.toggle("see");
    hamburger.classList.toggle("see");
})
arrow.addEventListener("click", function () {
    column.classList.toggle("show");
    arrow.classList.toggle("see");
    hamburger.classList.toggle("see");
})