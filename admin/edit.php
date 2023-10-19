<?php
    $pageTtle='Edit Post';
    include_once('../include/header.php');
    include_once('../config/session_validation.php');
?>
<div class="dashboard d-flex justify-content-between">
    <?php include_once('../include/siderbar.php');?>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 center card shadow p-3 bg-body rounded">
                <br/><h2 class="title p-3 text-white text-center fw-bold bg-primary">Edit POST</h2><br/>
                <?php include_once('../controllers/edit_post.php'); ?>
                <?php include_once('../controllers/update_post.php'); ?>
                <form action="edit.php" class="form" method="POST">
                    <?php
                        while ($data = mysqli_fetch_array($result)){
                    ?>
                    <div class="form-group mb-3">
                        <input type="text" name="title" value="<?php echo $data['title'];?>" class="form-control fs-3 fw-bold">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <textarea name="summary" cols="30" rows="10" class="form-control"><?php echo $data['summary'];?></textarea>
                        </div>
                        <div class="col">
                            <textarea name="content" cols="30" rows="10" class="form-control"><?php echo $data['content'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="hidden" name="date" value="<?php echo $fecha_actual;?>" class="form-control fs-3 fw-bold">
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label for="category"><b class="fs-4">Category: </b></label>
                        </div>
                        <div class="col">
                        <select name="category" class="form-select">
                                <?php
                                    $sqlCategories = "SELECT id, name FROM categories";
                                    $resultCategories = mysqli_query($conn, $sqlCategories);
                                    while ($row = mysqli_fetch_array($resultCategories)) {
                                        $selected = ($row['id'] == $data['category_id']) ? 'selected' : '';
                                        echo "<option value='{$row['id']}' $selected>{$row['name']}</option>";
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
                            <input type="text" class="form-control" name="img_post" value="<?php echo $data['img_post'];?>">
                        </div>
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