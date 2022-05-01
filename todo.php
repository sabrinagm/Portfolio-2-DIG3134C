<?php 

$database = mysqli_connect('localhost', 'root', 'root', 'todo');

if (isset($_POST['submit'])) {
    $task = $_POST['todotask'];
    mysqli_query($database, "INSERT INTO `todo` (`task`) VALUES ('{$task}');");

mysqli_close($database);
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
</body>
</html>