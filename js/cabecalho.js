const menuBurger = document.querySelector(".menu-burger");
const nav = document.querySelector(".navbar-menu");

menuBurger.addEventListener("click", (e) => {
    e.preventDefault()
    document.body.classList.toggle("mobile-open")
});