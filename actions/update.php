<?php
include "../database/config.php";

$id = $_POST['id'];
$title = $_POST['title'];
$priority = $_POST['priority'];

$query = "UPDATE tasks 
          SET title='$title', priority='$priority' 
          WHERE id=$id";

mysqli_query($conn, $query);

header("Location: ../index.php");
?>