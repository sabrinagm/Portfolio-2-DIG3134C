<?php
include("security.php");

if(secure_loggedIn()){
?>

<html>
    <head>
        <title>Remove</title>
    </head>

    <body>
        <p>Please enter your information to delete account.</p>
        <form action="delete.php" method="POST">

        <label>Username:</label>
        <input type="text" placeholder="Username" name="username" id="username">

        <label>Password:</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <button type="submit" name="submit">Delete Account</button>
        </form>

    <?php
    }

    else {
        echo('<a href="signup.php">Sign Up</a>');
    }

    security_deleteUser();
    ?>

    </body>
</html>