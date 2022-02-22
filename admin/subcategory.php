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
                        <h1 class="h3 mb-0 text-gray-800">Sub Categories</h1>
                        
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-6">
                            <?php

                            if (isset($_POST['submit'])) {
                                $subcat_title = $_POST['subcat_title'];
                                if ($subcat_title == "") {
                                    echo "<script> alert('Please Enter Sub Category Title');</script>";
                                } else {
                                    $query = "INSERT INTO subcategory (subcat_title) ";
                                    $query .= "VALUE ('{$subcat_title}')";

                                    $create_subcategory = mysqli_query($connection, $query);

                                    if (!$create_subcategory) {
                                        die('Query Failed' . mysqli_error($connection));
                                    }
                                }
                            }


                            ?>


                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="subcat_title">Add Sub Category</label>
                                    <input type="text" class="form-control" name="subcat_title" id="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add SubCategory">
                                </div>
                            </form>

                                <?php 
                                    if(isset($_GET['edit'])){
                                        $subcat_id = $_GET['edit'];
                                        include './includes/update_subcategories.php';
                                    }
                                
                                
                                ?>
    
                        </div>

                        <div class="col-6">


                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Sub Category Title</th>
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

                                    $query = "SELECT * FROM subcategory";
                                    $result = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $subcat_id = $row['subcat_id'];
                                        $subcat_title = $row['subcat_title'];
                                    ?>
                                        <tr>
                                            <td><?php echo $subcat_id; ?></td>
                                            <td><?php echo $subcat_title; ?></td>
                                            <td><?php echo "<a href='subcategory.php?delete={$subcat_id}'>Delete </a>"; ?></td>
                                            <td><?php echo "<a href='subcategory.php?edit={$subcat_id}'>Edit </a>"; ?></td>
                                        </tr>
                                    <?php  } ?>

                                    <?php
                                    // Delete Categories from data base
                                    if (isset($_GET['delete'])) {
                                        $the_subcat_id = $_GET['delete'];
                                        $query = "DELETE FROM subcategory WHERE subcat_id = {$the_subcat_id} ";
                                        $delete = mysqli_query($connection, $query);

                                        if (!$delete) {
                                            die('Can not delete data' . mysqli_error($connection));
                                        } else {
                                            header("Location: ./subcategory.php");
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