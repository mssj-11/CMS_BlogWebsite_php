<?php
$id = $_GET["id"];
if($id){
    include('../config/connection.php');/*
    $sqlEdit = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($conn, $sqlEdit);*/
    //  JOIN SQL
    $sqlEdit = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($conn, $sqlEdit);
} else {
    echo "No post found";
}
?>