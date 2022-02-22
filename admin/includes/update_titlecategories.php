<form action="" method="post">
  <div class="form-group">
    <label for="titlecat_title">Edit Title Category</label>
    <?php
    if (isset($_GET['edit'])) {
      $titlecat_id = $_GET['edit'];
      $query = "SELECT * FROM titlecategory WHERE titlecat_id = {$titlecat_id}";
      $result = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $titlecat_id = $row['titlecat_id'];
        $titlecat_title = $row['titlecat_title'];
    ?>

        <input type="text" value="<?php if (isset($titlecat_title)) {
                                    echo $titlecat_title;
                                  } ?>" class="form-control" name="titlecat_title" id="">


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
      $the_titlecat_title = $_POST['titlecat_title'];
      $query = "UPDATE `titlecategory` SET `titlecat_title` = '$the_titlecat_title' WHERE `titlecategory`.`titlecat_id` = $titlecat_id;";
      $update = mysqli_query($connection, $query);

      if (!$update) {
        die('query falied' . mysqli_error($connection));
      } else {  
        header("Location: titlecategory.php");
      }
    }
    ?>
