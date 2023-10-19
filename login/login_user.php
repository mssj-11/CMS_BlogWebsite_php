<?php
if (isset($_POST["login"])) {
    $email=$_POST["email"];
    $password=$_POST["password"];

    require_once ('../config/connection.php');
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user){
        if (password_verify($password, $user["password"])) {
            /*--- SESSION ---*/
            session_start();
            $_SESSION["user"] = "yes";
            /*---------------*/
            /*//// Getting user role ////*/
            $rol_id = $user["role_id"];
            /*///////////////////////////*/
            /**** Role-based Rediredction  ****/
            if ($rol_id == 1) {
                header("Location: ../admin/home.php");
            } else if ($rol_id == 2) {
                header("Location: ../user/home.php");
            } /*else {
                 Maneja otros roles si es necesario
                header("Location: ../default/home.php");
            }*/
            /* ****************************** */
            die();
        } else {
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Email does not match</div>";
    }
}
?>