<?php
if (isset($_POST['create_post'])) {

    $post_titlecategory_id = $_POST['post_titlecategory'];
    $post_subcategory_id = $_POST['post_subcategory'];
    $post_name = $_POST['post_name'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($post_image_temp, "../post_img/$post_image");
    $query = "INSERT INTO imageposts(post_titlecategory,post_subcategory, post_name,post_image) ";
    $query .= "VALUES('$post_titlecategory_id',  '$post_subcategory_id', '$post_name','$post_image' ) ";
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
            while ($row = mysqli_fetch_assoc($result)) {
                $titlecat_id = $row['titlecat_id'];
                $titlecat_title = $row['titlecat_title'];
                echo "<option value='$titlecat_title'>{$titlecat_title}</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="post_subcategory"> Product Sub Category </label>
        <select name="post_subcategory" class="form-control" id="">
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
        <label for="post_image"> Product Image</label>
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