const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    // toggle the icon
    this.classList.toggle("bi-eye");
});

function LightMode() {
    var element = document.body;
    element.classList.toggle("lightmode");
    if(document.getElementById("switch").value = DM){
        var LM = "Light Mo";
        document.getElementById("switch").value = LM;
    } else{
        var DM = "Dark Mo";
        document.getElementById("switch").value = DM;
    }

}
