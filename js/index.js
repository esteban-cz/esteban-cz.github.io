var copyButton = () => {
    document.getElementById("copybutton");

    var copy = () => {
        let name = document.getElementById("name").value;
        let item = document.getElementById("item").value;
        let starred = document.getElementById("starred").checked ? "★" : "";
        let paintkit = document.getElementById("paintkit").value;
        let stattrak = document.getElementById("stattrak").checked ? " StatTrak™" : "";
        let rarity = String.fromCharCode(eval(document.getElementById("rarity").value));

        let input = document.getElementById("dummyinput");
        input.value = `playerradio Radio.WePlanted "\u2028\x03\x03${name} \x01has opened a container and found: ${rarity}${starred}${stattrak} ${item} | ${paintkit}"`;
        input.select();
        input.setSelectionRange(0, input.value.length)
        document.execCommand("copy");

        // Change the button text to "Copied" for 3 seconds
        copyButton.disabled = true;
        copyButton.value = "Copied";
        setTimeout(function () {
            copyButton.disabled = false;
            copyButton.value = "Copy command";
        }, 3000);
    };

    copyButton.addEventListener("click", copy);
};
