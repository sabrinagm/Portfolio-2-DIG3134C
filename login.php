<!DOCTYPE html>
    <head>  
        <link rel="stylesheet" href="styles.css">
    </head>
<body>

<?php
include("security.php");

if (secure_loggedIn()){
    echo("<p>Already logged in. Click below to proceed.</p><br>");
    echo('<a class="anchor" href="todo.php">To-Do</a>');
}

else {
?>

<html>
    <head>
        <title>Login</title>
    </head>

    <body>

        <form action="login.php" method="POST">
        <p>Please enter your username and password below to login.</p>

        <label class="formInfo">Username:</label>
        <input class="formInfo"type="text" placeholder="Username" name="username" id="username"><br>

        <label class="formInfo">Password:</label>
        <input class="formInfo" type="password" placeholder="Password" name="password" id="password"><br>

        <button class="formButton" type="submit" name="submit">Login</button><br>

        <a class="anchor" href="index.php">Return to Main</a>
        </form>

    <?php
    }

    if (secure_validate()) {
        secure_login();
        echo('<a class="anchor" href="todo.php">Proceed to To-Do</a>');
        }
    ?>

    </body>
</html>

    </body>
</html>