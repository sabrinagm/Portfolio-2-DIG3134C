<!DOCTYPE html>
    <head>  
        <link rel="stylesheet" href="styles.css">
    </head>
<body>

<?php
//Accepts username and password. If they exist in the database, log in the user.
include("security.php");

if (secure_loggedIn()){
    echo("Already logged in. Click below to proceed.<br>");
    echo('<a href="index.php">Index</a>');
}

else {
?>

<html>
    <head>
        <title>Login</title>
    </head>

    <body>

        <form action="login.php" method="POST">
        <p>Please enter your username and password below to login.</p>

        <label class="formInfo">Username:</label>
        <input class="formInfo"type="text" placeholder="Username" name="username" id="username"><br>

        <label class="formInfo">Password:</label>
        <input class="formInfo" type="password" placeholder="Password" name="password" id="password"><br>

        <button class="formButton" type="submit" name="submit">Login</button>
        </form>

    <?php
    }

    if (secure_validate()) {
        secure_login();
        echo("<br><a href='logout.php'>Logout</a><br>");
        }
    ?>

    </body>
</html>

    </body>
</html>