<?php
include 'dbhandler.php';

$todoItem = $_POST['todoItem'];
mysqli_query($conn, "INSERT INTO `todos` (`title`) VALUES ('$todoItem');");

header("Location: index.php");

?>