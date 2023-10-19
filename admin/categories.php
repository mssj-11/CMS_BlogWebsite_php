<?php
    $pageTtle='Table Categories';
    include_once('../include/header.php');
?>
<div class="dashboard d-flex justify-content-between">
        <?php include_once('../include/siderbar.php');?>

        <div class="container mt-2 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <a href="create_category.php" class="btn text-white mb-3 bg-success"> Add new category</a>
                    <h2 class="card-title p-3 bg-danger text-center text-white fw-bold">Categories Table</h2>
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead class="text-white table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('../config/connection.php');
                                    $sql = "SELECT * FROM categories";
                                    $result = mysqli_query($conn, $sql);
                                    while ($data=mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $data["id"]; ?></td>
                                    <td><?php echo $data["name"]; ?></td>
                                    <td class="text-center">
                                        <a href="edit_categories.php?id=<?php echo $data["id"];?>" class="btn btn-warning text-white me-2"><i class="fa-solid fa-file-pen"></i></a>
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
<script src="../js/delete_category.js"></script>
<?php   include_once('../include/footer.php');?>