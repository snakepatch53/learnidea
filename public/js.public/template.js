const $navbarTop = document.getElementById("topnavbar");
const btn_toggle_navbar = document.getElementById("btn-mobile-toggle-navbar");

window.onscroll = function (evt) {
    const scrollY = evt.target.scrollingElement.scrollTop;
    if (scrollY > 50) return $navbarTop.classList.add("float");
    $navbarTop.classList.remove("float");
};

btn_toggle_navbar.onclick = () => $navbarTop.classList.toggle("open-menu");
