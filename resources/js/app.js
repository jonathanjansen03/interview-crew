require("./bootstrap");

const xBtn = document.getElementById("x-btn");
const toggleBtn = document.getElementById("toggle-mobile-navbar-btn");
const mobileNavbar = document.getElementById("mobile-navbar");

xBtn.addEventListener("click", () => {
    mobileNavbar.classList.add("hidden");
});

toggleBtn.addEventListener("click", () => {
    mobileNavbar.classList.remove("hidden");
})