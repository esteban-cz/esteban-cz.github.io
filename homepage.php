<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="website icon" type="png" href="images/est3ban-logo.png">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title">
            esteban
        </div>
        <!-- switch -->
        <label class="switch">
            <input type="checkbox" onclick="LightMode()">
            <span class="slider round"></span>
        </label>
    </div>
    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links">
        <a href="/homepage.php" target="_self">Home</a>
        <a href="/socials.html" target="_self">Socials</a>
        <a href="#" target="_self">About Me</a>
        <a href="index.html" target="_self">Log Out</a>
        <!--
        <a href="#" target="_blank"></a>
        <a href="#" target="_blank"></a>
        -->
    </div>
</div>


<script src="js/home.js"></script>
</body>
</html>
