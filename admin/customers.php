<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>


<div class="container-fluid pt-4 px-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="mb-0">All Customers</h5>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-1">
                          </div>     

                          <div class="content-body p-3">




                            <!-- view categories container -->
                    
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr class="table" style="color: aliceblue;">
                                            <th>Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Password</th>
                                            <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
                    
                                        <?php  
                                        
                                        require_once("./db-con.php");
                                        $select = "SELECT * FROM customers";
                                        $result = mysqli_query($con , $select);
                    
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                    
                    
                                        ?>
                    
                                            <tr>
                                            <td><?php echo $row['id'] ?></td>     
                                            <td><?php echo $row['first_name'] ?></td>
                                            <td><?php echo $row['last_name'] ?></td>    
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php echo $row['gender'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['password'] ?></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-light text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
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
                    
                    
                    
                    
                    
                    
                        </div> <!--*** Main wrapper end *****-->
                    

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>