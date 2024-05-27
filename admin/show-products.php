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
            <h3 class="text-light"> <i class="fa fa-eye text-danger"></i> View Products</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <h3><a href="./products.php" class="text-light"><i class="fa fa-plus text-danger"></i>Add Products</a></h3>
            </div>
            
            <?php
                 if (isset($data) && $data['errors'] === true) { 
                    ?>
                <div class="alert alert-danger mt-2 credErr"><?php echo $data['result'] ?></div>
            <?php
             } 
            ?>


            <?php 
            if (isset($data) && $data['errors'] === false) { 
                ?>
                <div class="alert alert-success mt-2 credErr"> <b>Congratulations! </b> Operation Performed Successfully...</div>
            <?php 
        }
         ?>


            <div class="table-responsive mt-2">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Unit Price</th>
                            <th>Color</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php
     require_once("./db-con.php");
$select = "SELECT * FROM products";
$result = mysqli_query($con, $select);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {


?>


<tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['unit_price'] ?></td>
                            <td><?php echo $row['color'] ?></td>
                            <td><?php echo $row['category_id'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><img src="./img/Products/<?php echo $row['image'] ?>" height="50px" alt=""></td>
                            
                            
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