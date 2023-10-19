<?php
    $pageTtle='Login';
    include_once('../include/header.php');
?>
<br><br><br>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 center card shadow p-4 bg-body rounded">
                <br/><h2 class="title p-3 text-center fw-bold text-white bg-primary">Login</h2><br/>
                <?php 
                    include_once('login_user.php');?>
                    <?php
                    include_once('../config/session.php');
                ?>
                <form action="../login/login.php" class="form" method="POST">
                    <div class="form-group mb-3">
                        <label for="email" class="form-label fw-bold"><i class="fa-solid fa-envelope"></i> Email</label>
                        <input type="email" name="email" placeholder="Enter tour email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label fw-bold"><i class="fa-solid fa-lock"></i> Password</label>
                        <input type="password" name="password" placeholder="Enter tour password" class="form-control">
                    </div>
                    
                    <br/>
                    <div class="mb-3">
                        <input type="submit" name="login" class="btn text-white me-3 p-2 bg-primary fw-bold form-control" value="Login in">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

<style>
    body{
        background-image: url(https://cdn.pixabay.com/photo/2016/03/26/13/09/workspace-1280538_1280.jpg);
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<?php   include_once('../include/footer.php');?>