<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link
      rel="stylesheet"
      href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />
   
    <!--   bootstrap  -->
   <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
   <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
   
   <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div
      class="wrapper"
      style="background-image: url('images/bg-registration-form-1.jpg')"
    >
      <div class="inner">
        <div class="image-holder">
          <img src="images/login-pic.jpg" alt="" />
        </div>
        <form action="./signup-query.php" method="POST">
          <h3>Registration Form</h3>
          <div class="form-group">
            <input type="text" placeholder="First Name" name="first_name" class="form-control" />
            <input type="text" placeholder="Last Name" name="last_name" class="form-control" />
          </div>
          <div class="form-wrapper">
            <input type="text" placeholder="Username" name="username" class="form-control" />
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
            <input
              type="text" name="email"
              placeholder="Email Address"
              class="form-control"
            />
            <i class="zmdi zmdi-email"></i>
          </div>
          <div class="form-wrapper">
            <select name="gender" id="" class="form-control">
              <option value="" disabled selected>Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
            <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
          </div>
          <div class="form-wrapper">
            <input 
            name="password"
              type="password"
              placeholder="Password"
              class="form-control"
            />
            <i class="zmdi zmdi-lock"></i>
          </div>
         
          <button>
            Register
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
          <p class="mt-2 offset-2">
            Already have an account!
            <span
              ><a id="login" href="signin.php"><b>Sign In</b></a></span
            >
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
