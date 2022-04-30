<?php
include("security.php");

if(secure_loggedIn()) {
echo('<a href="delete.php" class="link">Delete Account</a><br>');
echo('<br><a href="logout.php" class="link">Log Out</a>');
}

else {
    echo('<a href="newaccount.php" class="link">Create Account</a><br>');
    echo('<a href="login.php" class="link">Login</a><br>');    
}
?>