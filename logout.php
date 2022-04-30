<?php
//Log out a user.
include("security.php");

if(secure_loggedIn()){
secure_logout();
?>

<html>
<head>
    <title>Log Out</title>
<head>
    <body>
        <p>You have been logged out successfully.</p>
    </body>
</html>

<a href="login.php">Return to Login</a>

<?php 
}

else {
    echo('<a href="index.php">Index</a><br>');
}
