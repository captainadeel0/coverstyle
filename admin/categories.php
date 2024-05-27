<?php

//  $targetDir = "categories";
//  echo $targetDir = __FILE__ . "/images/$targetDir/"; exit;
// exit;


require_once("./db-con.php");
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "<pre>"; print_r($_POST);
    // echo "<pre>"; print_r($_FILES['image']); 
    //exit;

    $category = $_POST['category'];

    // upload image
    $data = uploadImage("categories", $_FILES['image']);

    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];
        $query = "INSERT INTO categories VALUES(null, '$category', '$name') ";

        if (!mysqli_query($con, $query)) {
            die("query failed");
        }
    }
}


//exit;

?>

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
                <div class="row  bg-secondary rounded align-items-center justify-content-center mx-0">
                   
                


                <!-- add category container -->
        <div class="container mt-3 p-4">

                <h3 class="text-light"> <i class="fa fa-plus text-primary"></i> Add Categories</h3>


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




               <h3 class="d-flex justify-content-end"> <a href="show-categories.php" class=" text-light"><i class="fa fa-eye text-primary"></i> View Categories</a></h3>
           

<hr>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="row">

    <div class="col-lg-6">
        <label class="form-label" for="val-username">Category <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="val-username" name="category" placeholder="Enter here..." required>
    </div>


    <div class="col-lg-6">
        <label class="form-label" for="userimage">Category Image <span class="text-danger">*</span>
        </label>
        <input type="file" class="form-control bg-dark" id="userimage" name="image" accept="image/*" required>
    </div>


    <div class="col-lg-4 offset-8">
        <label for=""></label>

        <button class="btn btn-light btn-lg mt-2 w-100">Add Category</button>
    </div>

</form>






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