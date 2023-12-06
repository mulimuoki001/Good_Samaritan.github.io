const navbarMenu = document.querySelector(".navbar .nav-links");
const menuBtn = document.querySelector(".navbar .menu-btn");
const hideMenu = document.querySelector(".navbar .nav-links .close-btn");
const ShowPopup = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopup = document.querySelector(".form-popup .close-btn");
const loginSignupLink = document.querySelectorAll(".form-box .bottom-link a");

menuBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

hideMenu.addEventListener("click", () => {
    navbarMenu.classList.remove("show-menu");
})

ShowPopup.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

hidePopup.addEventListener("click", () => {
    document.body.classList.remove("show-popup");
});

loginSignupLink.forEach((link) => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === "signup-link" ? "add" : "remove"](
            "show-signup"
        );
    });
});