<?php
//  EDIT
$id = $_GET["id"];
if($id){
    include('../config/connection.php');
    $sqlEdit = "SELECT * FROM categories WHERE id=$id";
    $result = mysqli_query($conn, $sqlEdit);
}
else {    echo "No post found";   }
?>