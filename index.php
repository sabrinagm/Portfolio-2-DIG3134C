<!DOCTYPE html>
    <head>  
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
<?php
include("security.php");

if(secure_loggedIn()) {
echo('<a href="delete.php" class="anchor">Delete Account</a><br>');
echo('<br><a href="logout.php"  class="anchor">Log Out</a>');
}

else {
    echo('<h1>Welcome to your to-do app!</h1><br>');
    echo('<p>Log in below or create a new account to get started.</p>');
    echo('<a href="newaccount.php" class="anchor">Create Account</a><br>');
    echo('<a href="login.php" class="anchor">Login</a><br>');    
}
?>
</body>
</html>