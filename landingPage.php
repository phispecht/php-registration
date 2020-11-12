<?php
include ("server.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
    <img class="headerImg" src="img/light_graffity.jpg" alt="picture of light graffity"/>
    <h1 id="headerImg-h1">Hallo <?php echo $firstName ?> </h1>
</body>
</html>