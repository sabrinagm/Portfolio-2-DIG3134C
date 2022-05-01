<!DOCTYPE html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
    <body>

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
        <form action="newaccount.php" method="POST">

        <label class="formInfo">Username:</label>
        <input class="formInfo" type="text" placeholder="Username" name="username" id="username"><br>

        <label class="formInfo">Password:</label>
        <input class="formInfo" type="password" placeholder="Password" name="password" id="password"><br>

        <button id="createButton" class="formButton" type="submit" name="submit">Create Account</button><br>

        <a class="anchor" href="index.php">Return to Main</a>
        </form>

    <?php
    }
    
    secure_addNewUser();
    ?>

    </body>
</html>

</body>
</html>