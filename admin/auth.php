<?php
session_start();
require_once "./db-con.php";

if (!isset($_SESSION['signin'])  || $_SESSION['signin'] == false) {
    header("location: signin.php");
} else {
    $sel_sql = "SELECT * FROM users WHERE id='$_SESSION[user_id]' ";
    $result = mysqli_query($con, $sel_sql);

    $row = mysqli_fetch_assoc($result);

    $_SESSION['user_name'] = $row['username'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_role'] = $row['role'];
    $_SESSION['user_image'] = $row['image'];
}