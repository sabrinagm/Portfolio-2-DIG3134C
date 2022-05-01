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
        echo('<a class="anchor" href="newaccount.php">Sign Up</a>');
    }

    secure_deleteUser();
    ?>

    </body>
</html>