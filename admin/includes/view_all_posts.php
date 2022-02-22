<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <!-- <th></th> -->
      <th>Category</th>
      <th>Content</th>
      <th>Sub Category</th>
      <th>Sub Content</th> 
      <th>Image</th>
      <th>Item Name</th>
 <th>

 </th>
   <th></th>
    </tr>
  </thead>
  <tbody>

    <?php
    $query = "SELECT * FROM posts";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $post_id = $row['post_id'];
      $post_titlecategory_id = $row['post_titlecategory_id'];
      $post_category_id = $row['post_category_id'];
      $post_content = substr($row['post_content'],0,50);
      $post_subcategory_id = $row['post_subcategory_id'];
      $post_subcontent = substr($row['post_subcontent'],0,50);
      $post_image = $row['post_image'];
      $post_name = $row['post_name'];
      // $post_title = $row['post_title'];  
      echo "<tr>";
      echo "<td>{$post_id}</td>";

      $titlecat_query = "SELECT * FROM titlecategory WHERE titlecat_id = '{$post_titlecategory_id}'";
      $titlecat_result = mysqli_query($connection, $titlecat_query);
      confirm($titlecat_result);
      while ($row = mysqli_fetch_assoc($titlecat_result)) {
        $titlecat_id = $row['titlecat_id'];
        $titlecat_title = $row['titlecat_title'];
      echo "<td>{$titlecat_title}</td>";
      }

      $cat_query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
      // echo "<td>{$post_name}</td>";
      $cat_result = mysqli_query($connection, $cat_query);
      confirm($cat_result);
      while ($row = mysqli_fetch_assoc($cat_result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
      echo "<td>{$cat_title}</td>";
      } 
      echo "<td>{$post_content}</td>";
      $subcat_query = "SELECT * FROM subcategory WHERE subcat_id = '{$post_subcategory_id}'";
      $subcat_result = mysqli_query($connection, $subcat_query);
      confirm($subcat_result);
      while ($row = mysqli_fetch_assoc($subcat_result)) {
        $subcat_id = $row['subcat_id'];
        $subcat_title = $row['subcat_title'];
      echo "<td>{$subcat_title}</td>";
      }
      echo "<td>{$post_subcontent}</td>"; 
      echo "<td><img width='100' src='../post_img/{$post_image}'></td>";
      echo "<td>{$post_name}</td>";
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