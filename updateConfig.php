<?php
include 'dbhandler.php';

$title = $_POST['todoItem'];
$id = $_POST['ID'];

mysqli_query($conn, "UPDATE `todos` SET `title` = '$title' WHERE `id` = $id;");
header("Location: index.php");
?>