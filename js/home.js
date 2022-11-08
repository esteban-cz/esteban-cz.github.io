const triggerMenu = document.querySelector(".menu"),
    header = document.querySelector(".header"),
    close = document.querySelector(".dark-part");

triggerMenu.addEventListener("click", () => {
    header.classList.add("active");
});
close.addEventListener("click", () => {
    header.classList.remove("active");
});