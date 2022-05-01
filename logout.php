<?php
//Log out a user.
include("security.php");

if(secure_loggedIn()){
secure_logout();
?>

<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Log Out</title>
<head>
    <body>
        <p>You have been logged out successfully.</p>
    </body>
</html>

<a href="login.php" class="anchor">Return to Login</a>

<?php 
}

else {
    echo('<a href="index.php">Return to Main</a><br>');
}
