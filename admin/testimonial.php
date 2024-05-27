<?php



require_once("./db-con.php");
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    $description = $_POST['description'];
    $client_name = $_POST['client_name'];

   
    $query = "INSERT INTO `testimonial`(`description`, `client_name`) 
    VALUES ('$_POST[description]','$_POST[client_name]' ) ";

    if (mysqli_query($con, $query)) {
        header("Location:show-testimonial.php");
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
         

<div class="container-fluid pt-4 px-4">
                <div class="row  bg-secondary rounded align-items-center justify-content-center mx-0">
                   
                


  <!-- add category container -->
  <div class="container mt-3 p-4">

<h3 class="text-light"> <i class="fa fa-plus text-danger"></i> Add Testimonials</h3>

<h3 class="d-flex justify-content-end"> <a href="show-testimonial.php" class=" text-light"><i class="fa fa-eye text-danger"></i> View Testimonials</a></h3>


<hr>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="row">

<div class="col-lg-12">
<label class="form-label" for="val-username">Description <span class="text-danger">*</span>
</label>
<textarea name="description" class="form-control" id="" rows="5" placeholder="Enter here..."></textarea>
</div>
<div class="col-lg-6 mt-3 input-group-lg">
        <label class="form-label" for="val-username">Client Name <span class="text-danger">*</span>
        </label>
        <input type="text" class="form-control" id="val-username" name="client_name" placeholder="Enter here..." required>
    </div>


    <div class="col-lg-6 mt-3">
    <label for=""></label>

<button class="btn btn-light btn-lg mt-2 w-100">Add Testimonials</button>
    </div>
</form>




</div>
            </div>


</div>
</div>

            
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>