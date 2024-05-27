<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>CoverStyle-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- header-section include -->
    <?php require_once("./includes/headers.php") ?>
    
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="  col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="mb-0">Add </h5>
                                <a href="user.html">Show All</a>
                            </div>
                            <hr>
                            <div class=" align-items-center border-bottom py-1">

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


        <div class="form-container">
                                    <form action="./add-user-query.php" method="POST" enctype="multipart/form-data" class="row">
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="name">Username <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter here..." required>
                                        </div>
                    
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="email">Email <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter here..." required>
                                        </div>
                    
                    
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="password">Password <span class="text-danger">*</span>
                                            </label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter here..." required>
                                        </div>
                    
                    
                    
                                        
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="image">Image <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" class="form-control" id="image" name="image" placeholder="Enter here..." required>
                                        </div>
                    
                                        
                    
                    
                                        <div class="offset-8 col-lg-4 mb-2">
                                            <label for=""></label>
                    
                                            <button class="btn btn-info text-white btn-lg mt-2 w-100"> <i class="fa fa-plus"></i> Add User</button>
                                        </div>
                    
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>


            
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>

        <!-- Rest of your HTML content -->
        <!-- Your form and other content here -->
    </div>
    <?php require_once("./includes/javascript-links.php") ?>
</body>
</html>


