var countdownTimeout;

function redirectToHomepage() {
    window.location.href = "src/view/homepage.html";
}

function skipCountdown() {
    clearTimeout(countdownTimeout);
    redirectToHomepage();
}

window.addEventListener("keydown", skipCountdown); 
window.addEventListener("click", skipCountdown);

const randomTimeout = Math.floor(Math.random() * 1001);

countdownTimeout = setTimeout(redirectToHomepage, randomTimeout);

