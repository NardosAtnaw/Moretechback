<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Bank ref Number</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM confirm_payment ORDER BY date DESC";
    $payment_result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($payment_result)) {
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $ref_number = $row['ref_number'];
      $date = $row['date'];

      echo "<tr>";
      echo "<td>{$id}</td>";
      echo "<td>{$name}</td>";
      echo "<td>{$email}</td>";
      echo "<td>{$ref_number}</td>";
      echo "<td>{$date}</td>";
      echo "</tr>";
    }


    ?>

  </tbody>
</table>

<?php


if (isset($_GET['unapprove'])) {
  $the_comment_id = $_GET['unapprove'];
  $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = $the_comment_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  header("Location: ./comments.php");
}

if (isset($_GET['approve'])) {
  $the_comment_id = $_GET['approve'];
  $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = $the_comment_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  header("Location: ./comments.php");
}

if (isset($_GET['delete_comment'])) {
  $the_comment_id = $_GET['delete_comment'];
  $query = "DELETE FROM comments WHERE comment_id = $the_comment_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  header("Location: ./comments.php");
}
?>