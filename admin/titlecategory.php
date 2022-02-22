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
                        <h1 class="h3 mb-0 text-gray-800">Title Categories</h1>
                        
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-6">
                            <?php

                            if (isset($_POST['submit'])) {
                                $titlecat_title = $_POST['titlecat_title'];
                                if ($titlecat_title == "") {
                                    echo "<script> alert('Please Enter Category Title');</script>";
                                } else {
                                    $query = "INSERT INTO titlecategory (titlecat_title) ";
                                    $query .= "VALUE ('{$titlecat_title}')";

                                    $create_titlecategory = mysqli_query($connection, $query);

                                    if (!$create_titlecategory) {
                                        die('Query Failed' . mysqli_error($connection));
                                    }
                                }
                            }


                            ?>


                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="titlecat_title">Add Category</label>
                                    <input type="text" class="form-control" name="titlecat_title" id="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                                </div>
                            </form>

                                <?php 
                                    if(isset($_GET['edit'])){
                                        $titlecat_id = $_GET['edit'];
                                        include './includes/update_titlecategories.php';
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

                                    $query = "SELECT * FROM titlecategory";
                                    $result = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $titlecat_id = $row['titlecat_id'];
                                        $titlecat_title = $row['titlecat_title'];
                                    ?>
                                        <tr>
                                            <td><?php echo $titlecat_id; ?></td>
                                            <td><?php echo $titlecat_title; ?></td>
                                            <td><?php echo "<a href='titlecategory.php?delete={$titlecat_id}'>Delete </a>"; ?></td>
                                            <td><?php echo "<a href='titlecategory.php?edit={$titlecat_id}'>Edit </a>"; ?></td>
                                        </tr>
                                    <?php  } ?>

                                    <?php
                                    // Delete Categories from data base
                                    if (isset($_GET['delete'])) {
                                        $the_titlecat_id = $_GET['delete'];
                                        $query = "DELETE FROM titlecategory WHERE titlecat_id = {$the_titlecat_id} ";
                                        $delete = mysqli_query($connection, $query);

                                        if (!$delete) {
                                            die('Can not delete data' . mysqli_error($connection));
                                        } else {
                                            header("Location: ./titlecategory.php");
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