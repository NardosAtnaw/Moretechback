<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Duration</th>
      <th>Category</th>
      <th>Status</th>
      <th>Image</th>
      <th>Tags</th>
      <th>Content</th>
      <th>Comment</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM posts";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $post_id = $row['post_id'];
      $post_title = $row['post_title'];
      $post_duration = $row['post_duration'];
      $post_category_id = $row['post_category_id'];
      $post_status = $row['post_status'];
      $post_image = $row['post_image'];
      $post_tag = $row['post_tags'];
      $post_content = substr($row['post_content'],0,50);
      $post_date = $row['post_date'];
      $post_comment_count = $row['post_comment_count'];

      echo "<tr>";
      echo "<td>{$post_id}</td>";
      echo "<td>{$post_title}</td>";
      echo "<td>{$post_duration}</td>";

      $cat_query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
      $cat_result = mysqli_query($connection, $cat_query);
      confirm($cat_result);
      while ($row = mysqli_fetch_assoc($cat_result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

      echo "<td>{$cat_title}</td>";
      }
      echo "<td>{$post_status}</td>";
      echo "<td><img width='100' src='../post_img/{$post_image}'></td>";
      echo "<td>{$post_tag}</td>";
      echo "<td>{$post_content}</td>";
      echo "<td>{$post_comment_count}</td>";
      echo "<td>{$post_date}</td>";
      echo "<td><a href='posts.php?source=edit_post&p_id=$post_id'>Edit</a></td>";
      echo "<td><a href='posts.php?delete=$post_id'>Delete</a></td>";
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