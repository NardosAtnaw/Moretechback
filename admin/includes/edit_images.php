<?php
if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];


    $query = "SELECT * FROM imageposts WHERE post_id = $p_id";

    $result = mysqli_query($connection, $query);

    confirm($result);

    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $post_titlecategory_id = $row['post_titlecategory'];
        $post_name = $row['post_name'];
        $post_image = $row['post_image'];
        $post_subcategory_id = $row['post_subcategory'];
    }
}
if (isset($_POST['update_post'])) {
    // $post_id = $row['post_id'];
    $post_titlecategory_id = $_POST['post_titlecategory'];
    $post_name = $_POST['product_name'];
    $post_image = $_FILES['image']['name'];
    $post_subcategory_id = $_POST['post_subcategory'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($post_image_temp, "../post_img/$post_image");
    if (empty($post_image)) {
        $image_query = "SELECT * FROM imageposts WHERE post_id = $p_id ";
        $selected_image = mysqli_query($connection, $image_query);

        while ($row = mysqli_fetch_assoc($selected_image)) {
            $post_image = $row['post_image'];
        }
    }

    $query = "UPDATE `imageposts` SET `post_titlecategory` = '$post_titlecategory_id', `post_subcategory` = '$post_subcategory_id',`post_name` = '$post_name',  `post_image` = '$post_image' WHERE `imageposts`.`post_id` = $p_id;";

    $update_post = mysqli_query($connection, $query);

    confirm($update_post);
}
?>

<form action="" method="POST" class="col-6" enctype="multipart/form-data">

    <div class="form-group">
        <label for="post_titlecategory_id"> Product Title</label>
        <select name="post_titlecategory" class="form-control" id="">
            <?php

            $query = "SELECT * FROM titlecategory";
            $result = mysqli_query($connection, $query);

            confirm($result);

            while ($row = mysqli_fetch_assoc($result)) {
                $titlecat_id = $row['titlecat_id'];
                $titlecat_title = $row['titlecat_title'];

                echo "<option value='$titlecat_title'>{$titlecat_title}</option>";
            }

            ?>
        </select>
    </div>

    <div class="form-group">
    <label for="post_subcategory_id"> Product Sub Category </label>
    <select name="post_subcategory" class="form-control" id="">
      <option value='<?php echo $post_subcategory_id; ?>'><?php echo $post_subcategory_id; ?></option>
      <?php

      $query = "SELECT * FROM subcategory";
      $result = mysqli_query($connection, $query);

      confirm($result);

      while ($row = mysqli_fetch_assoc($result)) {
        $subcat_id = $row['subcat_id'];
        $subcat_title = $row['subcat_title'];

        echo "<option value='$subcat_title'>{$subcat_title}</option>";
      }

      ?>
    </select>
  </div>



    <div class="form-group">
        <label for="post_image"> Post Image</label>

        <img width="100" src="../post_img/<?php echo $post_image ?>" style="display: block; margin-bottom: 1rem;" alt="">

        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="product_name">Name of Product</label>
        <input type="text" class="form-control" value="<?php echo $post_name; ?>" name="product_name">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
    </div>
</form>