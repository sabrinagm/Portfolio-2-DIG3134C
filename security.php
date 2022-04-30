<?php
    include("database.php");

//Used within: index.php, login.php, newaccount.php, logout.php, delete.php
function secure_loggedIn() {
        // Does a cookie exist?
        return isset($_COOKIE["login"]);
    }

function secure_validate() {
        // Set a default value
        $status = false;
        
        // Validate
        if(isset($_POST["username"]) and isset($_POST["password"])) {
            $status = true;
        }

        return $status;
    }

?>