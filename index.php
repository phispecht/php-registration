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
</head>
<body>
    <h1><?php echo $site ?></h1>
    <div id="registration">
    <div class="registration-section">
        <img src="img/woman_registration.png" alt="Woman at the laptop"/>
    </div>
    <div class="registration-section">
        <form action="landingPage.php" method="post">
            <label for="firstName">First Name:</label>
            <input name="firstName" type="text" placeholder="Tom" required></input>
            <label for="lastName">Surname:</label>
            <input name="lastName" type="text" placeholder="Jackson" required></input>
            <label for="email">Email:</label>
            <input name="email" type="email" placeholder="tom.jackson@gmail.com" required></input>
            <label for="userPassword">Password:</label>
            <input name="userPassword" type="password" placeholder="MyPassword" required></input>
            <div  class="submitButton">
                <button name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>