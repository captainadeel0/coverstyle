<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>
 


<style>
    
.email-left-box {
  width: 240px;
  float: left;
  padding: 0 20px 20px 10px; }

.email-right-box {
  margin-left: 250px; }

.email-list {
  display: block;
  padding-left: 0; }
  .email-list .message {
    position: relative;
    display: block;
    height: 50px;
    line-height: 50px;
    cursor: default;
    transition-duration: 0.3s; }
    .email-list .message:hover {
      transition-duration: 0.05s; }
    .email-list .message .col-mail {
      float: left;
      position: relative; }
    .email-list .message .col-mail-1 {
      width: 90px; }
      .email-list .message .col-mail-1 .star-toggle {
        display: block;
        float: left;
        margin-top: 18px;
        font-size: 16px;
        margin-left: 5px; }
      .email-list .message .col-mail-1 .email-checkbox {
        display: block;
        float: left;
        margin: 5px 10px 0 20px; }
      .email-list .message .col-mail-1 .dot {
        display: block;
        float: left;
        border: 4px solid transparent;
        border-radius: 100px;
        margin: 22px 26px 0;
        height: 0;
        width: 0;
        line-height: 0;
        font-size: 0; }
    .email-list .message .col-mail-2 {
      position: absolute;
      top: 0;
      left: 90px;
      right: 0;
      bottom: 0; }
      .email-list .message .col-mail-2 .subject {
        position: absolute;
        top: 0;
        left: 0;
        right: 200px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap; }
      .email-list .message .col-mail-2 .date {
        position: absolute;
        top: 0;
        right: 0;
        width: 170px;
        padding-left: 80px; }

.email-checkbox {
  cursor: pointer;
  height: 15px;
  width: 15px;
  position: relative;
  display: inline-block;
  border-radius: 1px;
  position: relative;
  top: 0px; }
  .email-checkbox input {
    cursor: pointer; }
    .email-checkbox input:checked label {
      opacity: 1; }
  .email-checkbox label {
    position: absolute;
    top: 3px;
    left: 3px;
    right: 3px;
    bottom: 3px;
    cursor: pointer;
    margin-bottom: 0 !important;
    transition-duration: 0.05s; }

.mail-list a {
  vertical-align: middle;
  padding: 10px 15px;
  display: block;
  background: transparent; }

@media (max-width: 648px) {
  .email-left-box {
    width: 100%; }
  .email-right-box {
    margin-left: 0; } }

@media (max-width: 520px) {
  .email-list .message .col-mail-1 {
    width: 900px; }
    .email-list .message .col-mail-1 .title {
      left: 80px; }
  .email-list .message .col-mail-2 {
    left: 90px; }
    .email-list .message .col-mail-2 .subject {
      right: 0; }
    .email-list .message .col-mail-2 .date {
      display: none; } }

.card-profile i, .card-profile span {
  font-size: 30px; }

.card-profile h3 {
  font-size: 1.2rem; }

.card-profile__info li strong {
  max-width: 100px; }

.form-profile__icons button {
  background: none; }

.form-profile__icons li i, .form-profile__icons li span {
  color: #AEB3C5; }

.social-icons .facebook {
  background: #3b5998; }
  .social-icons .facebook i, .social-icons .facebook span {
    color: #fff; }

.social-icons .twitter {
  background: #1da1f2; }
  .social-icons .twitter i, .social-icons .twitter span {
    color: #fff; }

.social-icons .youtube {
  background: #FF0000; }
  .social-icons .youtube i, .social-icons .youtube span {
    color: #fff; }

.social-icons .googlePlus {
  background: #db4439; }
  .social-icons .googlePlus i, .social-icons .googlePlus span {
    color: #fff; }

.media-reply {
  margin-bottom: 20px; }
  .media-reply .media-body {
    padding: 20px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1); }
    .media-reply .media-body .media-body {
      box-shadow: none; }
  .media-reply__link button {
    background: none; }
  .media-reply__link i, .media-reply__link span {
    color: #AFB4C5; }
    .media-reply__link i:hover, .media-reply__link span:hover {
      color: #FF4D87; }


</style>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body ">

            <div class="row page-titles mx-0 ">
                 
            </div>
            <!-- row -->

          
               
                <div class="container mt-2 p-4 rounded">
                        <div class="card bg-secondary">
                          
                                
                                  
                                        <div class="btn-group">
                                        <h3 class="text-light m-3 ">  All Emails</h3>
                                        <div class="email-right-box ">
                                
                                            </button>
                                            <!-- <div class="dropdown-menu"><span class="dropdown-header">More Option :</span>  <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a>  <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>  <a href="javascript: void(0);"
                                                class="dropdown-item">Add Star</a>  <a href="javascript: void(0);" class="dropdown-item">Mute</a>
                                            </div> -->
                                        </div>
                                    </div>

<?php
     require_once("./db-con.php");
     $select = "SELECT * FROM contact_us";
     $result = mysqli_query($con, $select);
     
     if (mysqli_num_rows($result) > 0) {
     
         while ($row = mysqli_fetch_assoc($result)) {
     
?>

                                    <div class="email-list m-t-15">
                                        <div class="message">
                                            <a href="email-read.php?id=<?= $row['id'] ?>">
                                                <div class="col-mail col-mail-1">
                                                    <div class="email-checkbox">
                                                        <input type="checkbox" id="chk2">
                                                        <label class="toggle" for="chk2"></label>
                                                    </div><span class="star-toggle ti-star"></span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                  
                                                    <div class=""><?php  echo $row['message'] ?></div>
                                                    <div class=""><?php  echo $row['send_time'] ?></div>
                                                </div>
                                            </a>
                                        </div>
                                       
                                        
                                        <?php  } }?>
                                        
                                
                                       
                                    <!-- panel -->
                                    <!-- <div class="row">
                                        <div class="col-7">
                                            <div class="text-left">1 - 20 of 568</div>
                                        </div>
                                        <div class="col-5">
                                            <div class="btn-group float-right">
                                                <button class="btn btn-gradient" type="button"><i class="fa fa-angle-left"></i>
                                                </button>
                                                <button class="btn btn-dark" type="button"><i class="fa fa-angle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
      
        <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>