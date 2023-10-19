<?php
/*----- Fecha Actual -----*/
date_default_timezone_set('America/Mexico_City');
$fecha_actual = date("Y/m/d");
/*------------------------*/
if (isset($_POST["create"])) {
    include_once('../config/connection.php');
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $img_post = mysqli_real_escape_string($conn, $_POST["img_post"]);
    $category_id  = mysqli_real_escape_string($conn, $_POST["category"]);
    

    $errors = array();
    if(empty($title) OR empty($summary) OR empty($content) OR empty($img_post)){
        array_push($errors, "All fields are required");
    }

    if(count($errors) > 0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        /* If there are no ERRORS, the data is inserted */
        $sql = "INSERT INTO posts (title, summary, content, date, img_post, category_id) VALUES ('$title', '$summary', '$content', '$date', '$img_post', '$category_id')";
        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success text-center'>The post has been created successfully</div>";
            /*** Redirect to Login ***/
            echo "<script>setTimeout(function() { window.location.href = '../admin/posts.php'; }, 6500);</script>";
            exit;
            /*************************/
        } else {    die("Something went wrong");
        }
    }
}
?>