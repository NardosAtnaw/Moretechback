<?php
if (isset($_GET['p_id'])) {
  $p_id = $_GET['p_id'];


  $query = "SELECT * FROM posts WHERE post_id = $p_id";

  $result = mysqli_query($connection, $query);

  confirm($result);

  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['post_id'];
    $post_titlecategory_id = $row['post_titlecategory'];
    // $post_content = $row['post_content'];
    $post_category_id = $row['post_category'];
    $post_content = $row['post_content'];
    $post_subcategory_id = $row['post_subcategory'];
    $post_subcontent = $row['post_subcontent'];
    // $post_name = $row['post_name'];
    // $post_image = $row['post_image'];
    // $post_title = $_POST['post_title'];
    // $post_image = $_FILES['image']['name'];
    // $post_image_temp = $_FILES['image']['tmp_name'];
  }
}
if (isset($_POST['update_post'])) {
  // $post_id = $row['post_id'];
  $post_titlecategory_id = $_POST['post_titlecategory'];
  $post_category_id = $_POST['post_category'];
  $post_content = $_POST['post_content'];
  $post_subcategory_id = $_POST['post_subcategory'];
  // $post_content = $_POST['post_content'];
  $post_subcontent = $_POST['post_subcontent'];
  // $post_name = $row['post_name'];
  // $post_image = $row['post_image'];
  // $post_title = $_POST['post_title'];
  // $post_image = $_FILES['image']['name'];
  // $post_image_temp = $_FILES['image']['tmp_name'];
  // move_uploaded_file($post_image_temp, "../post_img/$post_image");
  // if (empty($post_image)) {
  //   $image_query = "SELECT * FROM posts WHERE post_id = $p_id ";
  //   $selected_image = mysqli_query($connection, $image_query);
  //   while ($row = mysqli_fetch_assoc($selected_image)) {
  //     $post_image = $row['post_image'];
  //   }
  // }

  $query = "UPDATE `posts` SET `post_titlecategory` = '$post_titlecategory_id', `post_category` = '$post_category_id', `post_content` = '$post_content', `post_subcategory` = '$post_subcategory_id', `post_subcontent` = '$post_subcontent' WHERE `post_id` = $p_id;";

  $update_post = mysqli_query($connection, $query);
  confirm($update_post);
}
?>

<form action="" method="POST" class="col-6" enctype="multipart/form-data">
  <div class="form-group">
    <label for="post_titlecategory_id"> Product Title</label>
    <select name="post_titlecategory" class="form-control" id="">

      <option value='<?php echo $post_titlecategory_id; ?>'><?php echo $post_titlecategory_id; ?></option>
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
    <label for="post_category_id"> Product Category </label>
    <select name="post_category" class="form-control" id="">
      <option value='<?php echo $post_category_id; ?>'><?php echo $post_category_id; ?></option>
      <?php

      $query = "SELECT * FROM categories";
      $result = mysqli_query($connection, $query);

      confirm($result);

      while ($row = mysqli_fetch_assoc($result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<option value='$cat_title'>{$cat_title}</option>";
      }

      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="post_content"> Category Content</label>
    <textarea name="post_content" id="" cols="30" rows="10" class="form-control"><?php echo $post_content; ?>
    </textarea>
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
    <label for="post_subcontent"> Sub Category Description</label>
    <textarea name="post_subcontent" id="" cols="30" rows="10" class="form-control"><?php echo $post_subcontent; ?>
    </textarea>
  </div>

  <!-- <div class="form-group">
    <label for="post_content"> Category Content</label>
    <textarea name="post_content" id="" cols="30" rows="10" class="form-control">
    </textarea>
  </div> -->
  <!-- <div class="form-group">
    <label for="post_image"> Post Image</label>

    <img width="100" src="../post_img/" style="display: block; margin-bottom: 1rem;" alt="">

    <input type="file" name="image">
  </div>

  <div class="form-group">
    <label for="post_name">Name of Product</label>
    <input type="text" class="form-control" value="" name="post_name">
  </div> -->


  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
  </div>
</form>