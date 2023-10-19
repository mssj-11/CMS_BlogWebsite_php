<?php
/*----- Fecha Actual -----*/
date_default_timezone_set('America/Mexico_City');
$fecha_actual = date("Y/m/d");
/*------------------------*/
if (isset($_POST["update"])) {
    include_once('../config/connection.php');
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $img_post = mysqli_real_escape_string($conn, $_POST["img_post"]);
    $category_id = mysqli_real_escape_string($conn, $_POST["category"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sql = "UPDATE posts SET title='$title', summary='$summary', content='$content', date='$date', img_post='$img_post', category_id='$category_id' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["update"] = "Post updated successfully";
        header("Location: posts.php");
    } else {
        die("Something went wrong");
    }
    mysqli_close($conn);
}
?>