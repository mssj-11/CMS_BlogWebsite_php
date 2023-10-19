<?php
if (isset($_POST["update"])) {
    include_once('../config/connection.php');
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);

    $sql = "UPDATE categories SET name='$name' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["update"] = "Category updated successfully";
        header("Location: categories.php");
    } else {
        die("Something went wrong");
    }
    mysqli_close($conn);
}
?>