<?php include './includes/db.php'; ?>



<?php

$query = "SELECT * FROM posts WHERE post_status = 'published' ORDER BY post_id DESC";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $post_id = $row['post_id'];
  $post_name = $row['post_name'];
  $post_name2 = $row['post_name2'];
  $post_name3 = $row['post_name3'];
  $post_name4 = $row['post_name4'];
  $post_title = $row['post_title'];
  $post_content = substr($row['post_content'], 0, 157);
  $post_subcontent = substr($row['post_subcontent'], 0, 157);
  $post_image = $row['post_image'];
  $post_image2 = $row['post_image2'];
  $post_image3 = $row['post_image3'];
  $post_image4 = $row['post_image4'];

?>
  <div class="single-blog">
    <img src="./post_img/<?php echo $post_image; ?>" alt="blog desc" class="blog-img" />
    <img src="./post_img/<?php echo $post_image2; ?>" alt="blog desc" class="blog-img" />
    <img src="./post_img/<?php echo $post_image3; ?>" alt="blog desc" class="blog-img" />
    <img src="./post_img/<?php echo $post_image4; ?>" alt="blog desc" class="blog-img" />
    <div class="blog-content">
      <h2 class="blog-content-title">
        <?php echo $post_name; ?>
      </h2>
      <h2 class="blog-content-title">
        <?php echo $post_name2; ?>
      </h2>
      <h2 class="blog-content-title">
        <?php echo $post_name3; ?>
      </h2>
      <h2 class="blog-content-title">
        <?php echo $post_name4; ?>
      </h2>
      <p class="blog-text">
        <?php echo $post_content; ?>
      </p>
      <a href="./singleBlog.php?post_id=<?php echo $post_id ?>">Continue Reading
        <img src="./img/right-arrow.svg" alt="" />
      </a>
      <hr />

      <div class="blog-footer">
        <div class="blog-time">
          <img src="./img/clock.svg" alt="" />
          <p><?php echo $post_date; ?></p>
        </div>

        <div class="blog-duration"><?php echo $post_duration; ?></div>
      </div>
    </div>
  </div>

<?php }
?>