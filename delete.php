<?php
include 'dbhandler.php';

$id = $_GET['ID'];
mysqli_query($conn, "DELETE FROM `todos` WHERE `todos`.`id` = $id;");

header("Location: index.php");