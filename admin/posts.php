<?php
    $pageTtle='Table POSTS';
    include_once('../include/header.php');
?>
<div class="dashboard d-flex justify-content-between">
        <?php include_once('../include/siderbar.php');?>

        <div class="container mt-2 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <a href="create.php" class="btn text-white mb-3 bg-success"><i class="fa-solid fa-plus"></i> Add new post</a>
                    <h2 class="card-title p-3 bg-info text-center text-white fw-bold">POSTS Table</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="text-white table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Summary</th>
                                    <th>Content</th>
                                    <th>Categoria</th>
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('../config/connection.php');
                                    /*
                                    $sql = "SELECT * FROM posts";
                                    $result = mysqli_query($conn, $sql);*/
                                    //  LEFT JOIN SQL = Select all rows from the "posts" table
                                    $sql = "SELECT posts.id, posts.date, posts.title, posts.summary, posts.content, categories.name AS category 
                                        FROM posts LEFT JOIN categories ON posts.category_id = categories.id";
                                    $result = mysqli_query($conn, $sql);
                                    while ($data=mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $data["id"]; ?></td>
                                    <td><?php echo $data["date"]; ?></td>
                                    <td><?php echo $data["title"]; ?></td>
                                    <td><?php echo $data["summary"]; ?></td>
                                    <td style="height: 5px; overflow-y: auto;"><?php echo $data["content"]; ?></td>
                                    <td><?php echo $data["category"]; ?></td>
                                    <td class="text-center" style="width: 20%;">
                                        <a href="view.php?id=<?php echo $data["id"];?>" class="btn btn-primary me-2"><i class="fa fa-eye"></i></a>
                                        <a href="edit.php?id=<?php echo $data["id"];?>" class="btn btn-warning text-white me-2"><i class="fa-solid fa-file-pen"></i></a>
                                        <a onclick="delete_alert(<?php echo $data['id'];?>)" class="btn btn-danger me-2"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>
<script src="../js/delete_confirm.js"></script>
<?php   include_once('../include/footer.php');?>