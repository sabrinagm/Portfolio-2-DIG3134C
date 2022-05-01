<?php
//Connecting to database.
$connecting = mysqli_connect("localhost", "root", "todolist")

if(isset($_POST['submit'])) {
    $todoitem = $_POST['task']
    $data = "INSERT INTO `todolist` (`task`) VALUES ('$todoitem')";
    mysqli_query($connecting, $data);
    header("Location: todo.php");
    exit();
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