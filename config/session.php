<?php

session_start();

if (isset($_SESSION["user"])) {
    header("Location: ../admin/home.php");
}
?>