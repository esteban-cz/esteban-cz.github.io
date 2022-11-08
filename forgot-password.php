<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="website icon" type="png" href="images/est3ban-logo.png">
    <link rel="stylesheet" href="css/password.css">
</head>
<body>
<script>
    function Lightmode() {
        var element = document.body;
        element.classList.toggle("light-mode");
    }
</script>
<?php
// define variables and set to empty values
$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <span>E-mail: <input type="text" name="email"></span>
    <span class="error"> <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Send">

</form>
<form method="post" action="index.html">
    <input type="submit" name="submit" value="Back">
</form>

<button onclick="Lightmode()">Toggle light mode</button>



</body>
</html>