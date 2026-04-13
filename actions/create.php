<?php
include "../database/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];

    $query = "INSERT INTO tasks (title) VALUES ('$title')";
    mysqli_query($conn, $query);

    header("Location: ../index.php");
}