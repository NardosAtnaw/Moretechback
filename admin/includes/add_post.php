<?php
  if(isset($_POST['create_post'])){
    $post_category_id = $_POST['post_category'];
    $post_title = $_POST['post_title'];
    $post_duration = $_POST['post_duration'];
    $post_status = $_POST['post_status'];
    
    
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');

    move_uploaded_file($post_image_temp,"../post_img/$post_image");

    $query = "INSERT INTO posts(post_category_id, post_title, post_duration, post_date, post_image, post_content, post_tags, post_status) ";
    $query .= "VALUES($post_category_id,'$post_title','$post_duration',now(),'$post_image','$post_content','$post_tags','$post_status' ) ";

    $result = mysqli_query($connection, $query);

    confirm($result);
  } 



?>





<form action="" method="POST" class="col-6" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title"> Post Title</label>
    <input type="text" class="form-control" name="post_title">
  </div>

  <div class="form-group">
    <label for="post_category"> Post Category </label>
    <select name="post_category" class="form-control" id="">
       <?php

         $query = "SELECT * FROM categories";
         $result = mysqli_query($connection, $query);

         confirm($result);

         while($row = mysqli_fetch_assoc($result)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<option value='$cat_id'>{$cat_title}</option>";
         }
       
       ?>
    </select>
  </div>
  <div class="form-group">
    <label for="post_status"> Post Duration</label>
    <input type="text" class="form-control" name="post_duration">
  </div>
  <div class="form-group">
    <label for="post_status"> Post Status</label> 
    <select name="post_status" class="form-control" id="">
       <option value="draft">Select Options</option>
       <option value="published">Published</option>
       <option value="draft">Draft</option>
    </select>
  </div> 
  <div class="form-group">
    <label for="post_image"> Post Image</label>
    <input type="file" name="image">
  </div>

  <div class="form-group">
    <label for="post_tags"> Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
  </div>

  <div class="form-group">
    <label for="post_content"> Post Content</label>
    <textarea name="post_content" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
  </div>
</form>