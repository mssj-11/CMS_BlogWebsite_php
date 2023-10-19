<?php
if (isset($_POST["create"])) {
    include_once('../config/connection.php');
    $name = mysqli_real_escape_string($conn, $_POST["name"]);

    $errors = array();
    if(empty($name)){
        array_push($errors, "All fields are required");
    }

    if(count($errors) > 0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        /* If there are no ERRORS, the data is inserted */
        $sql = "INSERT INTO categories (name) VALUES ('$name')";
        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success text-center'>The category has been created successfully</div>";
            /*** Redirect to Login ***/
            echo "<script>setTimeout(function() { window.location.href = '../admin/categories.php'; }, 6500);</script>";
            exit;
            /*************************/
        } else {    die("Something went wrong");
        }
    }
}
?>