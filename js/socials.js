function solidToggle(event) {
    event.preventDefault()
    var social = document.getElementsByClassName('social')[0]
    social.classList.toggle('no-bg')
}

function LightMode() {
    var element = document.body;
    element.classList.toggle("lightmode");
    if(document.getElementById("switch").value = DM){
        var LM = "Light Mode";
        document.getElementById("switch").value = LM;
    } else{
        var DM = "Dark Mode";
        document.getElementById("switch").value = DM;
    }
}

function twitter() {
    window.open('https://www.twitter.com/Est3banE', '_blank');
}
function ig() {
    window.open('https://www.instagram.com/stepaaaneek/', '_blank');
}
function ytb() {
    window.open('https://www.youtube.com/channel/UCWMpq75nP2FGtBRgX8ambYQ', '_blank');
}
function reddit() {
    window.open('https://reddit.com', '_blank');
}
function github() {
    window.open('https://twitter.com/Est3banE', '_blank');
}
function spotify() {
    window.open('#')
}