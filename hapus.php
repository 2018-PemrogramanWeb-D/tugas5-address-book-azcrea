<?php

include_once("conf.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

header("Location: idx.php");
?>