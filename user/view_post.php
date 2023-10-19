<?php
              $id = $_GET["id"];
              if ($id) {
                include_once('../config/connection.php');
                  $sql = "SELECT posts.id, posts.date, posts.title, posts.summary, posts.content, posts.img_post, categories.name AS category
                          FROM posts
                          LEFT JOIN categories ON posts.category_id = categories.id
                          WHERE posts.id = $id";
                  $result = mysqli_query($conn, $sql);
                  while ($data = mysqli_fetch_array($result)) {
?>
            <h1 class="p-3 bg-dark text-white text-uppercase"><?php echo $data["title"];?></h1>
                <div class="shadow">
                  <div class="card-body m-4">
                    <div class="text-center">
                        <img src="<?php echo $data['img_post'];?>" class="rounded" style="width: 100%; height: 500px; background-size: cover; background-repeat: no-repeat;" alt="img-post">
                    </div>
                    <div class="d-flex mt-2">
                        <p class="text-white fw-bold fs-6 p-2 bg-dark rounded"><?php echo $data["date"]; ?></p> 
                        <p class="text-white fw-bold fs-6 p-2 bg-dark rounded" style="margin-left: 10px;"><?php echo $data["category"]; ?></p>
                    </div>
                    <p class="fst-normal" style="text-align: justify;"><b><?php echo $data["summary"]; ?></b></p>
                    <p class="fst-normal"><?php echo $data["content"]; ?></p><br/>
                  </div>
                </div>
              <?php
                }
                  } else {
                                echo "Post Not Found";
                    }
              ?>