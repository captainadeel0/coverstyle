<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>
 
 <div class="container mt-2 p-4 rounded">
                        <div class="card bg-secondary">
                          

 <div class="compose-content m-4">
                                        <form action="#">
                                            <div class="form-group ">
                                            <label class="form-label" for="name">To<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control bg-dark" placeholder="Enter here...">
                                            </div>
                                            <div class="form-group mt-2">
                                            <label class="form-label" for="name">Subject <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control bg-dark" placeholder="Enter here...">
                                            </div>
                                            <div class="form-group">
                                            <label class="form-label mt-2" for="name">Message <span class="text-danger">*</span></label>
                                                <textarea class="textarea_editor form-control bg-dark" rows="15" placeholder="Enter text ..."></textarea>
                                            </div>
                                        </form>
                                        <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18 bg-dark"></i> Attatchment</h5>
                                        <form action="#" class="dropzone">
                                            <div class="form-group">
                                                <div class="fallback">
                                                    <input class="l-border-1" name="file" type="file" multiple="multiple">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text-left m-t-15">
                                        <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="button"><i class="fa fa-paper-plane m-r-5"></i> Send</button>
                                        <button class="btn btn-dark m-b-30 m-t-15 f-s-14 p-l-20 p-r-20" type="button"><i class="ti-close m-r-5 f-s-12"></i> Discard</button>
                                    </div>
                                   </div>
                                   </div>








 
  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

   
    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>