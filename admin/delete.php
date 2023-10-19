<?php
include_once('../config/connection.php');
$delete_post = $_POST["id"];
$sql = $conn -> query("DELETE FROM posts WHERE id=$delete_post");
?>