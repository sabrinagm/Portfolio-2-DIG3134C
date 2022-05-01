<?php
include("security.php");

if(secure_loggedIn()){
?>

<html>
    <head>
        <title>Delete Account</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <p>Please enter your information below to delete your account.</p>
        <form action="delete.php" method="POST">

        <label class="formInfo">Username:</label>
        <input class="formInfo" type="text" placeholder="Username" name="username" id="username"><br>

        <label class="formInfo">Password:</label>
        <input class="formInfo" type="password" placeholder="Password" name="password" id="password"><br>

        <button class="formButton" type="submit" name="submit">Delete Account</button>
        </form>

    <?php
    }

    else {
        echo('<a class="anchor" href="newaccount.php">Sign Up</a>');
    }

    secure_deleteUser();
    ?>

    </body>
</html>