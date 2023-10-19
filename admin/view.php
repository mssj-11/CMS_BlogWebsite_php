<?php
    $pageTtle='View Post';
    include_once('../include/header.php');
    include_once('../config/session_validation.php');
?>
<div class="dashboard d-flex justify-content-between">
    <?php include_once('../include/siderbar.php');?>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 center card shadow p-4 bg-body rounded">
                <div class="form">
                    <?php
                        $id = $_GET["id"];
                        if ($id) {
                            include_once('../config/connection.php');
                            /*
                            $sql = "SELECT * FROM posts WHERE id=$id";
                            $result = mysqli_query($conn, $sql);*/
                            //  JOIN SQL
                            $sql = "SELECT posts.id, posts.date, posts.title, posts.summary, posts.content, posts.img_post, categories.name AS category
                                FROM posts
                                LEFT JOIN categories ON posts.category_id = categories.id
                                WHERE posts.id = $id";
                            $result = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <div class="text-center">
                        <img src="<?php echo $data['img_post'];?>" style="width: 100%; height: 500px; background-size: cover; background-repeat: no-repeat;" alt="img-post">
                    </div>
                        <div class="form-group mb-3">
                            <p class="fs-5 fw-bold"><?php echo $data['date'];?></p>
                            <p class="fs-5 color-grey"><b>Category:</b> <?php echo $data['category'];?></p>
                        </div>
                        <div class="form-group mb-3">
                            <p class="fs-3 fw-bold"><?php echo $data['title'];?></p>
                        </div>
                        <div class="form-group mb-3">
                            <p><?php echo $data['summary'];?></p>
                        </div>
                        <div class="form-group mb-3">
                            <p><?php echo $data['content'];?></p>
                        </div>
                        <br/>
                        <div class="mb-3">
                            <a href="./posts.php" class="btn text-white me-3 p-2 bg-black fw-bold form-control" value="Create">
                                <i class="fa-solid fa-circle-left"></i> Back
                            </a>
                        </div>
                    <?php
                        }
                            } else {
                                echo "Post Not Found";
                            }
                    ?>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</div>
<?php   include_once('../include/footer.php');?>