<?php
    $pageTtle='Edit Category';
    include_once('../include/header.php');
    include_once('../config/session_validation.php');
?>
<div class="dashboard d-flex justify-content-between">
    <?php include_once('../include/siderbar.php');?>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 center card shadow p-3 bg-body rounded">
                <br/><h2 class="title p-3 text-white text-center fw-bold bg-primary">Edit Category</h2><br/>
                <?php include_once('../controllers/edit_category.php'); ?>
                <?php include_once('../controllers/update_category.php'); ?>
                <form action="edit_categories.php" class="form" method="POST">
                    <?php
                        while ($data = mysqli_fetch_array($result)){
                    ?>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="form-group mb-3">
                        <input type="text" name="name" value="<?php echo $data['name'];?>" class="form-control fs-5 fw-bold">
                    </div>
                    <?php
                        }
                    ?>
                    <br/>
                    <div class="mb-3">
                        <input type="submit" name="update" class="btn text-white me-3 p-2 bg-primary fw-bold form-control" value="Update">
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</div>
<?php   include_once('../include/footer.php');?>