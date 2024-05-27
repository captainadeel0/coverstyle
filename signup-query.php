<?php

// db connection

require_once "./db-con.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

       
            $query = "INSERT INTO `customers`(`first_name`, `last_name`, `username`, `email`, `gender`, `password`) 
            VALUES ('$_POST[first_name]','$_POST[last_name]', '$_POST[username]', '$_POST[email]', '$_POST[gender]', '$_POST[password]') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:signin.php");
            }
            else{
                echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
            }
        }
        else{ 
            
          echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";

        }

    exit;



?>