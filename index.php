<?php
include("security.php");

if(secure_loggedIn()) {
echo('<a href="remove.php">Delete Account</a><br>');
echo('<br><a href="logout.php">Log Out</a>');
}

else {
    echo('<a href="signup.php">Create Account</a><br>');
    echo('<a href="login.php">Login</a><br>');    
}
?>