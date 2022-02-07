<?php
  if(isset($_POST['create_user'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];
    $query = "INSERT INTO users(user_name, user_password, user_firstname, user_lastname, user_email, user_role ) ";
    $query .= "VALUES('$user_name','$user_password','$user_firstname','$user_lastname','$user_email','$user_role' ) ";

    $user_result = mysqli_query($connection, $query);

    confirm($user_result);
  } 



?>





<form action="" method="POST" class="col-6" enctype="multipart/form-data">

  <div class="form-group">
    <label for="user_firstname"> First Name</label>
    <input type="text" class="form-control" name="user_firstname">
  </div>

  <div class="form-group">
    <label for="user_lastname"> Last Name</label>
    <input type="text" class="form-control" name="user_lastname">
  </div>

  <div class="form-group">
    <label for="user_role"> User Role </label> <br>
    <select name="user_role" id="">
       <option value="Author">Select Options</option>
       <option value="Admin">Admin</option>
       <option value="Author">Author</option>
    </select>
  </div> 

  <div class="form-group">
    <label for="post_status"> User Name</label>
    <input type="text" class="form-control" name="user_name">
  </div>
  <div class="form-group">
    <label for="post_status"> Email</label>
    <input type="email" class="form-control" name="user_email">
  </div>
 

  <div class="form-group">
    <label for="post_tags"> Password</label>
    <input type="password" class="form-control" name="user_password">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_user" value="Add User">
  </div>
</form>