<?php include './includes/admin_header.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include './includes/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include './includes/topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
                        
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-6">
                            <?php

                            if (isset($_POST['submit'])) {
                                $cat_title = $_POST['cat_title'];
                                if ($cat_title == "") {
                                    echo "<script> alert('Please Enter Category Title');</script>";
                                } else {
                                    $query = "INSERT INTO categories (cat_title) ";
                                    $query .= "VALUE ('{$cat_title}')";

                                    $create_category = mysqli_query($connection, $query);

                                    if (!$create_category) {
                                        die('Query Failed' . mysqli_error($connection));
                                    }
                                }
                            }


                            ?>


                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title" id="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                                </div>
                            </form>

                                <?php 
                                    if(isset($_GET['edit'])){
                                        $cat_id = $_GET['edit'];
                                        include './includes/update_categories.php';
                                    }
                                
                                
                                ?>
    
                        </div>

                        <div class="col-6">


                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                          <tr>
                                            <th>Id</th>
                                            <th>Category Title</th>
                                        </tr>
                                    </tfoot> -->
                                <tbody>
                                    <?php

                                    // Display categories from database

                                    $query = "SELECT * FROM categories";
                                    $result = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                    ?>
                                        <tr>
                                            <td><?php echo $cat_id; ?></td>
                                            <td><?php echo $cat_title; ?></td>
                                            <td><?php echo "<a href='categories.php?delete={$cat_id}'>Delete </a>"; ?></td>
                                            <td><?php echo "<a href='categories.php?edit={$cat_id}'>Edit </a>"; ?></td>
                                        </tr>
                                    <?php  } ?>

                                    <?php
                                    // Delete Categories from data base
                                    if (isset($_GET['delete'])) {
                                        $the_cat_id = $_GET['delete'];
                                        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                                        $delete = mysqli_query($connection, $query);

                                        if (!$delete) {
                                            die('Can not delete data' . mysqli_error($connection));
                                        } else {
                                            header("Location: ./categories.php");
                                        }
                                    }

                                    ?>



                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include './includes/admin_footer.php'; ?>