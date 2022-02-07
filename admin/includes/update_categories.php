<form action="" method="post">
  <div class="form-group">
    <label for="cat_title">Edit Category</label>
    <?php
    if (isset($_GET['edit'])) {
      $cat_id = $_GET['edit'];
      $query = "SELECT * FROM categories WHERE cat_id = {$cat_id}";
      $result = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
    ?>

        <input type="text" value="<?php if (isset($cat_title)) {
                                    echo $cat_title;
                                  } ?>" class="form-control" name="cat_title" id="">


    <?php }
    }
    ?>

</div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_category" value="Update Category">
  </div>
</form>
    <?php
    // Update category

    if (isset($_POST['update_category'])) {
      $the_cat_title = $_POST['cat_title'];
      $query = "UPDATE `categories` SET `cat_title` = '$the_cat_title' WHERE `categories`.`cat_id` = $cat_id;";
      $update = mysqli_query($connection, $query);

      if (!$update) {
        die('query falied' . mysqli_error($connection));
      } else {  
        header("Location: categories.php");
      }
    }
    ?>
