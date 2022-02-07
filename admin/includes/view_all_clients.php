<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Client Number</th>
      <th>Total Balance</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM clients";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $client_id = $row['client_id'];
      $client_name = $row['client_name'];
      $client_phone = $row['client_phone'];
      $client_email = $row['client_email'];
      $client_number = $row['client_number'];
      $client_balance = $row['client_balance'];

      echo "<tr>";
      echo "<td>{$client_id}</td>";
      echo "<td>{$client_name}</td>";
      echo "<td>{$client_phone}</td>";
      echo "<td>{$client_email}</td>";
      echo "<td>{$client_number}</td>";
      echo "<td>{$client_balance} birr</td>";
      echo "<td><a href='clients.php?source=edit_client&p_id=$client_id'>Edit</a></td>";
      echo "<td><a href='clients.php?delete=$client_id'>Delete</a></td>";
      echo "</tr>";
    }


    ?>

  </tbody>
</table>

<?php 

  if(isset($_GET['delete'])){
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = $the_post_id";
    $result = mysqli_query($connection, $query);

    confirm($result);
    header("Location: ./posts.php");
  }



?>