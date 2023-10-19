            <!--CARDs de Personajes
            <div class="row">-->
            <div class="card-group row row-cols-1 row-cols-md-2">
            <?php
                include_once('../config/connection.php');
                $sql = "SELECT posts.id, posts.date, posts.title, posts.summary, posts.content, posts.img_post, categories.name AS category 
                    FROM posts LEFT JOIN categories ON posts.category_id = categories.id 
                    ORDER BY posts.date DESC";
                $result = mysqli_query($conn, $sql);
                while ($data=mysqli_fetch_array($result)) {
            ?>
              <div class="col mb-4 ">
                <div class="card box shadow">
                  <div class="card-body">
                    <div class="text-center">
                        <img src="<?php echo $data['img_post'];?>" style="width: 100%; height: 250px; background-size: cover; background-repeat: no-repeat;" alt="logo">
                    </div>
                    <h3 class="card-title"><?php echo $data["title"]; ?></h3>
                    <div class="d-flex justify-content-between mt-1">
                        <p class="text-white fw-bold fs-6 p-1 bg-primary rounded"><?php echo $data["date"]; ?></p>
                        <p class="text-white fw-bold fs-6 p-1 bg-primary rounded"><?php echo $data["category"]; ?></p>
                    </div>
                    <p class="fst-normal" style="text-align: justify;"><?php echo $data["summary"]; ?></p>
                    <a href="post.php?id=<?php echo $data["id"];?>" class="btn btn-dark fw-bold">Read more</a>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
              <!--
            </div>
            END CARDs de Personajes-->