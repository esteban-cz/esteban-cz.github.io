<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundClouder</title>
    <link rel="website icon" type="png" href="images/SoundClouder_logo.png">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<form method="post" action="">
    <label for="url">Enter the URL of the song:</label><br>
    <input type="text" id="url" name="url"><br>
    <input type="submit" value="Download" name="submit">
</form>

<script src="js/index.js"></script>
</body>
</html>

<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the user's input from the form
    $url = $_POST['url'];
// Use the file_get_contents function to retrieve the contents of the URL
    $html = file_get_contents($url);

// Use a regular expression to extract the direct download URL and the title of the song from the HTML
    preg_match('/href="(https:\/\/api\.soundcloud\.com\/tracks\/[^"]+\/download)"/', $html, $matches);
    $download_url = $matches[1];

    preg_match('/<title>([^"]+)<\/title>/', $html, $matches);
    $title = $matches[1];

// Clean up the title to remove any unwanted characters
    $title = preg_replace('/[^\w\s]/', '', $title);
    $title = preg_replace('/\s+/', ' ', $title);

// Check if the title is empty or invalid
    if (empty($title)) {
        // Set the title to a default value
        $title = 'song';
    }

// Use the file_get_contents function to download the song and save it to a file with the same name as the title
    $song = file_get_contents($download_url);
    file_put_contents("./$title.mp3", $song);
}

?>
