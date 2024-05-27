<?php

session_start();

// Check if form is submitted

// db connection

require_once "./db-con.php";
require_once "./includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // echo "<pre>"; print_r($_POST); echo "</pre>";
    // echo "<pre>"; print_r($_FILES); echo "</pre>";

        // upload image
        $data = uploadImage("users", $_FILES['image']);

        if ($data['errors'] === false) {
            // save info into db
            $name = $data['result'];

            echo $name;
            // exit;
            

            $query = "INSERT INTO `users`(`username`, `email`, `password`, `image`) 
            VALUES ('$_POST[username]','$_POST[email]' ,'$_POST[password]', '$name') ";
    
             $result = mysqli_query($con, $query);
            
             
    // Check if query executed successfully
    if ($result) {
        // Data inserted successfully, set success message
        $_SESSION['success'] = "User added successfully.";
    } else {
        // Data insertion failed, set error message
        $_SESSION['error'] = "Failed to add user. Please try again.";
    }

    // Redirect back to the form page
    header("Location: add-new-user.php");
    exit();
}
}

?>