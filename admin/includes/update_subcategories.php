<form action="" method="post">
  <div class="form-group">
    <label for="subcat_title">Edit Sub Category</label>
    <?php
    if (isset($_GET['edit'])) {
      $subcat_id = $_GET['edit'];
      $query = "SELECT * FROM subcategory WHERE subcat_id = {$subcat_id}";
      $result = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $subcat_id = $row['subcat_id'];
        $subcat_title = $row['subcat_title'];
    ?>

        <input type="text" value="<?php if (isset($subcat_title)) {
                                    echo $subcat_title;
                                  } ?>" class="form-control" name="subcat_title" id="">


    <?php }
    }
    ?>

</div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_subcategories" value="Update Sub Categories">
  </div>
</form>
    <?php
    // Update category

    if (isset($_POST['update_subcategories'])) {
      $the_subcat_title = $_POST['subcat_title'];
      $query = "UPDATE `subcategory` SET `subcat_title` = '$the_subcat_title' WHERE `subcategory`.`subcat_id` = $subcat_id;";
      $update = mysqli_query($connection, $query);

      if (!$update) {
        die('query falied' . mysqli_error($connection));
      } else {  
        header("Location: subcategory.php");
      }
    }
    ?>
