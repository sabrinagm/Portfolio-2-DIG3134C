<?php
    include("database.php");

//Used within: index.php, login.php, newaccount.php, logout.php, delete.php
function secure_loggedIn() {
        // Does a cookie exist?
        return isset($_COOKIE["login"]);
    }

?>