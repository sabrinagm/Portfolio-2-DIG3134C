<?php
    // Global connection
    $connection = null;

    function database_connect() {
        // Use the global connection
        global $connection;

        // Server
        $server = "localhost";
        // Username
        $username = "root";

        $password = "root";
        // Database
        $database = "accounts";

        if($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    function database_verifyUser($username, $password) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT password FROM accounts WHERE username = '{$username}';");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                // Verify password against saved hash
                if(password_verify($password, $row["password"])) {
                    $status = true;
                }
            }
        }

        return $status;
    }


    function database_close() {
        // user global connection
        global $connection;

        if($connection != null) {
            mysqli_close($connection);
        }
    }

function database_addUser($username, $password) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            // Overwrite the existing password value as a hash
            $password = password_hash($password, PASSWORD_DEFAULT);
            // Insert username and hashed password
            mysqli_query($connection, "INSERT INTO accounts (username, password) VALUES ('{$username}', '{$password}');");

        header("Location: todo.php");
        exit();
        }
    }

    //Accepts username and password.
    //Communicates with database server.
    //Verifies user exists.
function database_deleteUser($username, $password) {
        
        // Use the global connection
        global $connection;

        if(database_verifyUser($username, $password)) {
            $deleteUser = "DELETE FROM accounts WHERE username = '{$username}'";
            mysqli_query($connection, $deleteUser);

            echo("Record deleted succesfully.");
        }
    }

function databaseTask_connect() {
        // Use the global connection
        global $connection;

        // Server
        $serverTask = "localhost";
        // Username
        $usernameTask = "root";

        $passwordTask = "root";
        // Database
        $databaseTask = "todo";

        if($connection == null) {
            $connection = mysqli_connect($serverTask, $usernameTask, $passwordTask, $databaseTask);
        }
    }

function database_addTask($task) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            // Insert username and hashed password
            mysqli_query($connection, "INSERT INTO todo (task) VALUES ($task);");

        header("Location: todo.php");
        exit();
        }
    }


?>