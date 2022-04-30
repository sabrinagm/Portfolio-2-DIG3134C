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

        <label>Full Name:</label>
        <input type="text" placeholder="Full Name" name="fullname" id="fullname">

        <label>Phone Number:</label>
        <input type="text" placeholder="Phone Number" name="phonenumber" id="phonenumber">

        <button type="submit" name="submit">Create Account</button>
        </form>

    <?php
    }
    
    secure_addNewUser();
    ?>

    </body>
</html>