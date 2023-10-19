<?php
    $pageTtle='Add Post';
    include_once('../include/header.php');
?>
<div class="dashboard d-flex justify-content-between">
    <?php include_once('../include/siderbar.php');?>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 center card shadow p-3 bg-body rounded">
                <br/><h2 class="title p-3 text-white text-center fw-bold bg-primary">Create POST</h2><br/>
                <?php include_once('../controllers/create_post.php'); ?>
                <form action="create.php" class="form" method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="title" placeholder="Title:" class="form-control fs-3 fw-bold">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <textarea name="summary" placeholder="Enter Summary:" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="col">
                            <textarea name="content" placeholder="Enter Post:" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" class="form-control" name="date" value="<?php echo $fecha_actual;?>">
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label for="category"><b class="fs-4">Category: </b></label>
                        </div>
                        <div class="col">
                            <select name="category" class="form-select">
                                <?php
                                include_once('../config/connection.php');
                                $sql = "SELECT id, name FROM categories";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='{$row['id']}'>{$row['name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label for="img_post"><b class="fs-4">Image: </b></label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="img_post" placeholder="Enter the image URL">
                        </div>
                    </div>
                    <br/>
                    <div class="row mb-3">
                        <input type="submit" name="create" class="btn text-white me-3 p-2 bg-primary fw-bold form-control" value="Create">
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</div>



<?php   include_once('../include/footer.php');?>