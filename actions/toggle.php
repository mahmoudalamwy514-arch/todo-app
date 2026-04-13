<?php
include "../database/config.php";

$id = $_GET['id'];

// نجيب الحالة الحالية
$query = "SELECT is_completed FROM tasks WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$newStatus = $row['is_completed'] == 1 ? 0 : 1;

// نحدث الحالة
$update = "UPDATE tasks SET is_completed=$newStatus WHERE id=$id";
mysqli_query($conn, $update);

header("Location: ../index.php");
?>