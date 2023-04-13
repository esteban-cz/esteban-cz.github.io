<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSGO Fake Case Drop</title>
    <link rel="website icon" type="png" href="images/case.png">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<h2>Item settings</h2>

<p>
    <label for="name">Your name</label>
    <input id="name" type="text" value="Player">

</p>

<p>
    <label for="item">Item</label>
    <input id="item" type="text" value="Karambit">

</p>

<p>
    <input id="starred" type="checkbox" value="Player" checked>
    <label for="starred">Knife or gloves?</label>

</p>

<p>
    <label for="paintkit">Paint kit</label>
    <input id="paintkit" type="text" value="Lore">

</p>

<p>
    <input id="stattrak" type="checkbox" value="Player" checked>
    <label for="stattrak">StatTrack&trade;?</label>

</p>

<p>
    <label for="rarity">Rarity</label>

    <select id="rarity">

        <option value="0x0F" selected>Covert (red)</option>
        <option value="0x0E">Classified (pink)</option>
        <option value="0x0C">Mil-Spec (blue)</option>

    </select>

</p>

<input id="dummyinput" style="position:absolute;left:-100%" type="text">
<button onclick="copy()">Copy command</button>

<script src="https://fb.me/react-with-addons-15.1.0.js"></script>
<script src="https://fb.me/react-dom-15.1.0.js"></script>
<script src="js/index.js"></script>
</body>
</html>

