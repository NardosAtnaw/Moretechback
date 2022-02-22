<?php
  if(isset($_POST['create_post'])){
    // $post_title = $_POST['post_title'];
    $post_titlecategory_id = $_POST['post_titlecategory'];
    $post_category_id = $_POST['post_category'];
    $post_subcategory_id = $_POST['post_subcategory'];
    $post_name = $_POST['post_name'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];  
    $post_content = $_POST['post_content'];
    $post_subcontent = $_POST['post_subcontent'];
    move_uploaded_file($post_image_temp,"../post_img/$post_image");
    $query = "INSERT INTO posts(post_titlecategory_id,post_category_id,post_subcategory_id,post_subcontent, post_name,post_image, post_content) ";
    $query .= "VALUES( $post_titlecategory_id, $post_category_id,$post_subcategory_id,'$post_subcontent','$post_name','$post_image','$post_content' ) ";
    $result = mysqli_query($connection, $query);
    confirm($result);
  } 
?>
<form action="" method="POST" class="col-6" enctype="multipart/form-data">
<div class="form-group">
    <label for="post_titlecategory"> Product Title </label>
    <select name="post_titlecategory" class="form-control" id="">
       <?php
         $query = "SELECT * FROM titlecategory";
         $result = mysqli_query($connection, $query);
         confirm($result);
         while($row = mysqli_fetch_assoc($result)){
            $titlecat_id = $row['titlecat_id'];
            $titlecat_title = $row['titlecat_title'];
            echo "<option value='$titlecat_id'>{$titlecat_title}</option>";
         }       
       ?>
    </select>
  </div>
  <div class="form-group">
    <label for="post_category"> Product Category </label>
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
    <label for="post_content"> Category Description</label>
    <textarea name="post_content" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="post_subcategory"> Product Sub Category </label>
    <select name="post_subcategory" class="form-control" id="">
       <?php
         $query = "SELECT * FROM subcategory";
         $result = mysqli_query($connection, $query);
         confirm($result);
         while($row = mysqli_fetch_assoc($result)){
            $subcat_id = $row['subcat_id'];
            $subcat_title = $row['subcat_title'];
            echo "<option value='$subcat_id'>{$subcat_title}</option>";
         }   
       ?>
    </select>
  </div>
  <div class="form-group">
    <label for="post_content"> Sub Category Description</label>
    <textarea name="post_subcontent" id="" cols="30" rows="10" class="form-control"></textarea>
  </div> 
  <div class="form-group">
    <label for="post_image">  Product Image</label>
    <input type="file" name="image">
  </div>
  <div class="form-group">
    <label for="post_name"> Product Name</label>
    <input type="text" class="form-control" name="post_name">
  </div>



  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Product">
  </div>
</form>