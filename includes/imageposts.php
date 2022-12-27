<?php include './includes/db.php'; ?>



<?php

$query = "SELECT * FROM imageposts WHERE post_status = 'published' ORDER BY post_id DESC";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['post_id'];
    $post_name = $row['post_name'];


    $post_image = $row['post_image'];


?>
    <div class="single-blog">
        <img src="./post_img/<?php echo $post_image; ?>" alt="blog desc" class="blog-img" />

        <div class="blog-content">
            <h2 class="blog-content-title">
                <?php echo $post_name; ?>
            </h2>

        </div>
    </div>

<?php }
?>