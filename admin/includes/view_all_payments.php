<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Bank</th>
      <th>Client Number</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM payment ORDER BY payment_date DESC";
    $payment_result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($payment_result)) {
      $payment_id = $row['payment_id'];
      $payment_name = $row['payment_name'];
      $payment_email = $row['payment_email'];
      $payment_phone = $row['payment_phone'];
      $payment_bank = $row['payment_bank'];
      $payment_crm = $row['payment_crm'];
      $payment_date = $row['payment_date'];

      echo "<tr>";
      echo "<td>{$payment_id}</td>";
      echo "<td>{$payment_name}</td>";
      echo "<td>{$payment_email}</td>";
      echo "<td>{$payment_phone}</td>";
      echo "<td>{$payment_bank}</td>";
      echo "<td>{$payment_crm}</td>";
      echo "<td>{$payment_date}</td>";
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