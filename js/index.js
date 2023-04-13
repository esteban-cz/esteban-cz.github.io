var copy = () =>
{
    let name = document.getElementById("name").value;
    let item = document.getElementById("item").value;
    let starred = document.getElementById("starred").checked ? "★" : "";
    let paintkit = document.getElementById("paintkit").value;
    let stattrak = document.getElementById("stattrak").checked ? " StatTrak™" : "";
    let rarity = String.fromCharCode(eval(document.getElementById("rarity").value));

    let input = document.getElementById("copyinput");
    input.value = `playerradio Radio.WePlanted "\u2028\x03\x03${name} \x01has opened a container and found: ${rarity}${starred}${stattrak} ${item} | ${paintkit}"`;
    input.select();
    input.setSelectionRange(0, input.value.length)
    document.execCommand("copy");

    let button = document.getElementById("copybutton");
    button.innerText = "Copied";
    setTimeout(() => {
        button.innerText = "Copy command";
    }, 3000);
};
