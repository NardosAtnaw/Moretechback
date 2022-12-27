<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Sub Category</th>
            <th>Image</th>
            <th>Item Name</th>
            <th>

            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php
        $query = "SELECT * FROM imageposts";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $post_id = $row['post_id'];
            $post_titlecategory_id = $row['post_titlecategory'];
            $post_subcategory_id = $row['post_subcategory'];
            $post_image = $row['post_image'];
            $post_name = $row['post_name'];
            // $post_title = $row['post_title']; 
            echo "<tr>";
            echo "<td>{$post_id}</td>";
            echo "<td>{$post_titlecategory_id}</td>";
            echo "<td>{$post_subcategory_id}</td>";
            echo "<td><img width='50' src='../post_img/{$post_image}'></td>";
            echo "<td>{$post_name}</td>";
            echo "<td><a href='imageposts.php?source=edit_images&p_id=$post_id'>Edit</a></td>";
            echo "<td><a href='imageposts.php?delete=$post_id'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php

if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM imageposts WHERE post_id = $the_post_id";
    $result = mysqli_query($connection, $query);

    confirm($result);
    header("Location: ./imageposts.php");
}



?>