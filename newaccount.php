<?php
include("security.php");

if(secure_loggedIn()){
echo('<a href="index.php">Index</a>');
    }

else {
?>

<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
        <p>Please enter a username and password below to signup.</p>
        <form action="newuser.php" method="POST">

        <label>Username:</label>
        <input type="text" placeholder="Username" name="username" id="username">

        <label>Password:</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <button type="submit" name="submit">Create Account</button>
        </form>

    <?php
    }
    
    secure_addNewUser();
    ?>

    </body>
</html>