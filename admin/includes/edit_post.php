<?php
if (isset($_GET['p_id'])) {
  $p_id = $_GET['p_id'];


  $query = "SELECT * FROM posts WHERE post_id = $p_id";

  $result = mysqli_query($connection, $query);

  confirm($result);

  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_duration = $row['post_duration'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];
    $post_date = $row['post_date'];
  }
}
if (isset($_POST['update_post'])) {
  $post_category_id = $_POST['post_category'];
  $post_title = $_POST['post_title'];
  $post_duration = $_POST['post_duration'];
  $post_status = $_POST['post_status'];


  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];

  $post_tags = $_POST['post_tags'];
  $post_content = $_POST['post_content'];
  $post_date = date('d-m-y');

  move_uploaded_file($post_image_temp, "../post_img/$post_image");
  if (empty($post_image)) {
    $image_query = "SELECT * FROM posts WHERE post_id = $p_id ";
    $selected_image = mysqli_query($connection, $image_query);

    while ($row = mysqli_fetch_assoc($selected_image)) {
      $post_image = $row['post_image'];
    }
  }

  $query = "UPDATE `posts` SET `post_category_id` = '$post_category_id', `post_title` = '$post_title', `post_duration` = '$post_duration', `post_image` = '$post_image', `post_content` = '$post_content', `post_tags` = '$post_tags', `post_status` = '$post_status' WHERE `posts`.`post_id` = $p_id;";

  $update_post = mysqli_query($connection, $query);

  confirm($update_post);
}
?>





<form action="" method="POST" class="col-6" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title"> Post Title</label>
    <input type="text" class="form-control" value="<?php echo $post_title; ?>" name="post_title">
  </div>

  <div class="form-group">
    <label for="post_category"> Post Category</label>

    <select name="post_category" class="form-control" id="">
      <?php

      $query = "SELECT * FROM categories";
      $result = mysqli_query($connection, $query);

      confirm($result);

      while ($row = mysqli_fetch_assoc($result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<option value='$cat_id'>{$cat_title}</option>";
      }

      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="post_status"> Post Duration</label>
    <input type="text" class="form-control" value="<?php echo $post_duration; ?>" name="post_duration">
  </div>
  <div class="form-group">
    <label for="post_status">Post Status</label> <br>
    <select name="post_status" class="form-control" id="">
    <option value="<?php echo $post_status; ?>"><?php echo $post_status; ?></option>
    <?php 

    if($post_status == 'published') {
      echo '<option value="draft">draft</option>';
    }else {
      echo '<option value="published">Published</option>';
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
    <label for="post_tags"> Post Tags</label>
    <input type="text" class="form-control" value="<?php echo $post_tags; ?>" name="post_tags">
  </div>

  <div class="form-group">
    <label for="post_content"> Post Content</label>
    <textarea name="post_content" id="" cols="30" rows="10" class="form-control"><?php echo $post_content; ?>
    </textarea>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
  </div>
</form>