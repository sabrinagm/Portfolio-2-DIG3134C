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

function secure_login() {
        // Set a default value
        $status = false;
        // Validate and sanitize
        $result = secure_sanitize();
        // Open connection
        database_connect();
        // Use the connection
        $status = database_verifyUser($result["username"], $result["password"]);
        // Close connection
        database_close();
        // Check status
        if($status) {
            // Set a cookie
            setcookie("login", "yes");
        }
    }

function secure_sanitize() {
        // Create an array of keys username and password
        $result = [
            "username" => null,
            "password" => null
        ];

        if(secure_validate()) {
            // After validation, sanitize text input.
            $result["username"] = htmlspecialchars($_POST["username"]);
            $result["password"] = htmlspecialchars($_POST["password"]);
        }

        // Return array
        return $result;
    }

function secure_logout() {
        // Set a cookie to the past
        setcookie("login", "yes", time() - 10);
    }

function secure_addNewUser() {
        // Validate and sanitize.
        $result = secure_sanitize();
        // Open connection.
        database_connect();

        // Use connection.
        //
        // We want to make sure we don't add
        //  duplicate values.
        if(!database_verifyUser($result["username"], $result["password"])) {
            // Username does not exist.
            // Add a new one.
            database_addUser($result["username"], $result["password"]);
        }
        
        // Close connection.
        database_close();
    }

?>