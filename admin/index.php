<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                            <p class="mb-2">Total &nbsp; Products </p>
                            
                                
                                <?php
                                require_once("./db-con.php");
                                $select = "SELECT * FROM products";
                                
                                $result = mysqli_query($con, $select);
                                
                                if($categories_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$categories_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total &nbsp; Categories </p>
                                
                                <?php
                                require_once("./db-con.php");
                                $select = "SELECT * FROM categories";
                                
                                $result = mysqli_query($con, $select);
                                
                                if($categories_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$categories_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Customers</p>
                                <?php
                                require_once("./db-con.php");
                                $select = "SELECT * FROM customers";
                                
                                $result = mysqli_query($con, $select);
                                
                                if($customers_total = mysqli_num_rows($result))
                                
                                {
                                
                                echo ' <h6 class="mb-0">'.$customers_total.'</h6>';
                                }
                                else
                                 {
                                    echo ' <h6 class="mb-0">No data found</h6>';
                                 }
                              
                                  ?>
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


           </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>