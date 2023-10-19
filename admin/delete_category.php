<?php
include_once('../config/connection.php');
$delete_category = $_POST["id"];
$sql = $conn -> query("DELETE FROM categories WHERE id=$delete_category");
?>