// Toggle Class Active
const navbarnav = document.querySelector(".navbar-nav");
// klik menu
document.querySelector("#menu").onclick = () => {
    navbarnav.classList.toggle("active");
};

// hilangkan menu
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !navbarnav.contains(e.target)) {
        navbarnav.classList.remove("active");
    }
});
