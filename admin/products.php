



<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>



            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 ">
                      
        <!-- view categories container -->
        <div class="container">
            <h3 class="text-light"> <i class="fa fa-plus text-danger"></i> Add Products</h3>

         
        <?php if (!empty($_SESSION['error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show credErr">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> <?php echo $_SESSION['error']; ?>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <?php if (!empty($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show credErr">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>





            <div class="col-8">

            
           



            </div>
          
            <div class="d-flex justify-content-end">
                <h3><a href="show-products.php" class="text-light"><i class="fa fa-eye text-danger"></i> View Proudcts</a></h3>
            </div>
            <hr>
            <div class="form-container">
                <form action="./add-products-query.php" method="POST" enctype="multipart/form-data" class="row">

                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="name">Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="unit_price">Unit Price <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-4 mb-2">
                    <label class="form-label" for="color">Color <span class="text-danger">*</span>
                        </label>
                    <select name="color" id="color" class="form-control bg-dark">
                        
                           <option value="" disabled selected>Select Color...</option>
                           <option>Red</option>
                           <option value="female">Green</option>
                           <option value="other">White</option>
                           <option value="other">Black</option>
                           <option value="other">Yellow</option>
                           <option value="other">Pink</option>
                           <option value="other">Gray</option>
                           
                        
                    </select>
                    </div>



                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="category">Category <span class="text-danger">*</span>
                        </label>
                        <select class="form-control bg-dark" name="category" id="category">
                        <option value="-1">Choose here...</option>
                            <!-- fetch category from category table -->
                            <?php
                            require_once "./db-con.php";

                            $select = "SELECT * FROM categories";
                            $result = mysqli_query($con, $select);

                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $row['id'] ?>"> <?php echo $row['category'] ?>  </option>

                            <?php  } } ?>
                        </select>
                    </div>



                    <div class="col-lg-4 ">
                        <label class="form-label" for="quantity">Quantity <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="image">Image <span class="text-danger">*</span>
                        </label>
                        <input type="file" class="form-control bg-dark" id="image" name="image" placeholder="Enter here..." required>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label class="form-label" for="val-username">Description <span class="text-danger">*</span>
                        </label>
                        <textarea name="description" class="form-control" id="" rows="5"></textarea>
                    </div>

                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>

                        <button class="btn btn-danger text-white btn-lg mt-2 w-100"> <i class="fa fa-plus"></i> Add Product</button>
                    </div>

                </form>
            </div>

        </div>

                    </div>
                </div>
            </div>
            <!-- Blank End -->


          
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

  
    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>