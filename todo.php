<?php 

//Connects to database.
$databaseconnect = mysqli_connect('localhost', 'root', 'root', 'todo');

//When user clciks submit button, inserts task into database.
if (isset($_POST['submit'])) {
    $task = $_POST['todotask'];
    mysqli_query($databaseconnect, "INSERT INTO `todo` (`task`) VALUES ('{$task}');");
    echo("<p>Task has been added to database!</p>");

//Closes connection.
mysqli_close($databaseconnect);
}

?>

<!DOCTYPE html>
    <head>  
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
<h1 class="todoheader" >Today's a great day to add some things to your to-do list!</h1>

<form action="todo.php" method="POST">

    <input class=formInfo type="text" name="todotask">
    <button class="formButton" type="submit" name="submit" placeholder="Enter a task.">Add</button>

</form>

</body>
</html>

<?php
        echo("<br><a class='anchor' href='logout.php'>Logout</a><br>");
        echo('<a class="anchor" href="delete.php">Delete Account</a>');
?>