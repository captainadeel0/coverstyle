<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>
 




 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-secondary mt-2">
                            <div class="card-body ">
                          
                                <div class="email-right-box ">
                            
                                <?php
     require_once("./db-con.php");
     $get_id = $_GET['id'];
     $select = "SELECT * FROM contact_us WHERE id= $get_id";
     $result = mysqli_query($con, $select);
     
     if (mysqli_num_rows($result) > 0) {
     
        $row = mysqli_fetch_assoc($result);
     
?>

                                    <div class="read-content m-3">
                                        <div class="media">
                                            <!-- <img class="mr-3 rounded-circle" src="images/avatar/1.jpg"> -->
                                            <div class="media-body">
                                                <h5 class="m-b-3"><?php  echo $row['name'] ?></h5>
                                               
                                            </div>
                                            
                                        </div>
                                        <hr>
                                        <div class="media mb-4 mt-1">
                                        <h4 class="m-0 text-primary ">Subject</h4>
                                            <div class="media-body d-flex justify-content-between">
                                                <?php  echo $row['subject'] ?><small class="text-muted">To:Me, <?php  echo $row['email'] ?></small>
                                                <span class="float-right"><?php  echo $row['send_time'] ?></span>
                                            </div>
                                        </div>
                                        <h5 class="m-b-15"></h5>
                                        <p><?php  echo $row['message'] ?></p>
                                      
                                        
                                        <hr>
                                        <div class="form-group p-t-15">
                                            <textarea class="w-100 bg-dark p-20 l-border-1" name="" id="" cols="30" rows="5" placeholder="It's really an amazing.I want to know more about it..!"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primaryw-md m-b-30" type="button">Send</button>
                                    </div>
                                

  
                                    <?php
                                  
                                } 
                                  
                                  ?>
                                        


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->








  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

   
    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>