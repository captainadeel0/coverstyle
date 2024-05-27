<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>


          <!-- view categories container -->
        <div class=" col-lg-10 m-3 bg-secondary p-4">
            <h3 class="text-light"> <i class="fa fa-eye text-light"></i> View Categories</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <h3><a href="./categories.php" class="text-light"><i class="fa fa-plus"></i> Add Categories</a></h3>
            </div>

            <div class="table-responsive mt-2">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php
     require_once("./db-con.php");
$select = "SELECT * FROM categories";
$result = mysqli_query($con, $select);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {


?>



                    <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['category'] ?></td>
                            <td><img src="./img/categories/<?php echo $row['image'] ?>" height="50px" alt=""></td>
                            
                           <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="edit-product.php?id=<?= $row['id'] ?>">Edit</a>
                                        <a class="dropdown-item" href="delete-product.php?id=<?= $row['id'] ?>">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <?php
                            }
                        }

                        ?>


                    </tbody>
                </table>
            </div>

        </div>



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
  
    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>