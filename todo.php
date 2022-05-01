<?php 

//Connects to database.
$databaseconnect = mysqli_connect('localhost', 'root', 'root', 'todo');

//When user clciks submit button, inserts task into database.
if (isset($_POST['submit'])) {
    $task = $_POST['todotask'];
    mysqli_query($databaseconnect, "INSERT INTO `todo` (`task`) VALUES ('{$task}');");

//Closes connection.
mysqli_close($databaseconnect);
}

?>

<!DOCTYPE html>
    <head>  
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
<h1 class="todoheader" >Today's a great day to check some things off your list!</h1>

<form action="todo.php" method="POST">

    <p>To-Do List</p>
    <input class=formInfo type="text" name="todotask">
    <button class="formButton" type="submit" name="submit">Add</button>

</form>

<?php

$return = mysqli_query($databaseconnect, "SELECT task FROM tasks");
$row = mysqli_fetch_assoc($return);
mysqli_close($databaseconnect);

?>

<table>
    <tr>
        <th>Task</th>
        <th>Complete</th>
        <tr>
            <td><?php echo($row['task']);?></td>
            <td></td>
        </tr>
    </tr>
<table>
</body>
</html>

<?php
        echo("<br><a class='anchor' href='logout.php'>Logout</a><br>");
?>