var close_btn = document.querySelector("#close-btn");
var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
    sidebar.classList.toggle("active-nav");
    container.classList.toggle("active-cont");
    menu_btn.classList.toggle("active-button");
    document.getElementById("icon-menu").classList.toggle("fa-times");
    document.getElementById("icon-menu").classList.toggle("fa-bars");
});

close_btn.addEventListener("click", () => {
    sidebar.classList.toggle("active-nav");
    container.classList.toggle("active-cont");
    document.getElementById("icon-menu").classList.toggle("fa-times");
    document.getElementById("icon-menu").classList.toggle("fa-bars");
});

