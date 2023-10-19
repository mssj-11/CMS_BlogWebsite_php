<?php
    $pageTtle='Add Category';
    include_once('../include/header.php');
?>
<div class="dashboard d-flex justify-content-between">
    <?php include_once('../include/siderbar.php');?>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 center card shadow p-3 bg-body rounded">
                <br/><h2 class="title p-3 text-white text-center fw-bold bg-info">Create CATEGORY</h2><br/>
                <?php include_once('../controllers/create_categories.php'); ?>
                <form action="create_category.php" class="form" method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Enter the name category:" class="form-control fs-5 fw-bold">
                    </div>
                    <br/>
                    <div class="mb-3">
                        <input type="submit" name="create" class="btn text-white me-3 p-2 bg-info fw-bold form-control" value="Create">
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</div>



<?php   include_once('../include/footer.php');?>