<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/white-version/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 14:54:48 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>ParkAt | Sign-In</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form action="controller.php" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			  	<?php
			   		session_start();
			   		if(!empty($_SESSION["error"]["name"]))	
			   		{

			   	?>		
			   		<label>Invalid Email or Password</label>
			   	<?php
			   			session_destroy();
			   		}
			   	?>
			   <div class="position-relative has-icon-right">

				  <label for="exampleInputUsername" class="sr-only">Registration No</label>
				  <input type="text" id="exampleInputUsername" name="nmtxtregno" required class="form-control form-control-rounded" placeholder="Registration No">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
				  <input type="password" id="exampleInputPassword" name="nmtxtpassword" required class="form-control form-control-rounded" placeholder="Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row mr-0 ml-0">
			 <div class="form-group col-6">
			   <div class="demo-checkbox">
                <input type="checkbox" id="user-checkbox" class="filled-in chk-col-primary" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="authentication-reset-password.html">Reset Password</a>
			 </div>
			</div>
			 
			 <input type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light" value="Sign In" name="nmbtnsignin">
			  <div class="text-center pt-3">
				<p class="text-muted">Do not have an account? <a href="signup.php"> Sign Up here</a></p>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
</body>

<!-- Mirrored from codervent.com/rocker/white-version/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 14:54:48 GMT -->
</html>
