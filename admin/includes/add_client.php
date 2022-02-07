<?php
  if(isset($_POST['create_client'])){
    $client_name = $_POST['client_name'];
    $client_phone = $_POST['client_phone'];
    $client_email = $_POST['client_email'];
    $client_number = $_POST['client_number'];
    $client_balance = $_POST['client_balance'];

    $query = "INSERT INTO clients(client_name, client_phone, client_email, client_number, client_balance ) ";
    $query .= "VALUES('$client_name','$client_phone','$client_email','$client_number','$client_balance' ) ";

    $result = mysqli_query($connection, $query);

    confirm($result);
  } 



?>





<form action="" method="POST" class="col-6">

  <div class="form-group">
    <label for="title"> Client Name</label>
    <input type="text" class="form-control" name="client_name">
  </div>

  <div class="form-group">
    <label for="post_category"> Client Phone </label>
    <input type="text" class="form-control" name="client_phone">
  </div>
  <div class="form-group">
    <label for="post_status"> Client Email</label>
    <input type="text" class="form-control" name="client_email">
  </div>
  <div class="form-group">
    <label for="post_image"> Client Number</label>
    <input type="text" class="form-control" name="client_number">
  </div>
  <div class="form-group">
    <label for="post_tags"> Client Balance</label>
    <input type="text" class="form-control" name="client_balance">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_client" value="Add client">
  </div>
</form>