<?php
$hostName="localhost";
$userName="root";
$dbPassword="";
$dbName="cms_blogwebsite_php";

$conn = mysqli_connect($hostName, $userName, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong");
}
?>