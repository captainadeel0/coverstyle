<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>


            <!-- Widget Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>

                            <?php
     require_once("./db-con.php");
$select = "SELECT * FROM contact_us";
$result = mysqli_query($con, $select);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {


?>
                            
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
            <div class=" w-100 justify-content-between">
                                        <h6 class="mb-0 text-light">Name: <?php echo $row['name'] ?></h6>
                                        <span>Email: <?php echo $row['email'] ?></span> 
                                        
                                        
                                    </div>
                        
                                    <span><?php echo $row['message'] ?></span>
                                </div>
                            </div>
                           
                            
                            <?php
                            }
                        }

                        ?>
                        </div>
                    </div>
                    

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

   
    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>