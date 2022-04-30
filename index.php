<?php
include("security.php");

if(secure_loggedIn()) {
echo('<a href="delete.php">Delete Account</a><br>');
echo('<br><a href="logout.php">Log Out</a>');
}

else {
    echo('<h1>Hello, welcome to your to-do app!</h1><br>');
    echo('<p>Please login below or create a new account to get started.</p>');
    echo('<a href="newaccount.php">Create Account</a><br>');
    echo('<a href="login.php">Login</a><br>');    
}
?>