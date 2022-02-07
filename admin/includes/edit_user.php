<?php
if (isset($_GET['edit'])) {
  $user_id = $_GET['edit'];


  $query = "SELECT * FROM users WHERE user_id = $user_id";

  $result = mysqli_query($connection, $query);

  confirm($result);

  while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];
  }
}
if (isset($_POST['update_user'])) {
  $user_name = $_POST['user_name'];
  $user_password = $_POST['user_password'];
  $user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
  $user_email = $_POST['user_email'];
  $user_role = $_POST['user_role'];

  $query = "UPDATE `users` SET `user_name` = '$user_name', `user_password` = '$user_password', `user_firstname` = '$user_firstname', `user_lastname` = '$user_lastname', `user_email` = '$user_email', `user_role` = '$user_role' WHERE `users`.`user_id` = $user_id;";

  $update_post = mysqli_query($connection, $query);

  confirm($update_post);
}
?>




<form action="" method="POST" class="col-6">

  <div class="form-group">
    <label for="user_firstname"> First Name</label>
    <input type="text" class="form-control" value="<?php echo $user_firstname; ?>" name="user_firstname">
  </div>

  <div class="form-group">
    <label for="user_lastname"> Last Name</label>
    <input type="text" class="form-control" value="<?php echo $user_lastname; ?>" name="user_lastname">
  </div>

  <div class="form-group">
    <label for="user_role"> User Role </label> <br>
    <select name="user_role" id="">
    <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
    <?php 

    if($user_role == 'Admin') {
      echo '<option value="Author">Author</option>';
    }else {
      echo '<option value="Admin">Admin</option>';
    }

    
    
    ?>
    </select>
  </div>

  <div class="form-group">
    <label for="post_status"> User Name</label>
    <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>">
  </div>
  <div class="form-group">
    <label for="post_status"> Email</label>
    <input type="email" class="form-control" value="<?php echo $user_email; ?>" name="user_email">
  </div>


  <div class="form-group">
    <label for="post_tags"> Password</label>
    <input type="password" class="form-control" value="<?php echo $user_password; ?>" name="user_password">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_user" value="Update User">
  </div>
</form>