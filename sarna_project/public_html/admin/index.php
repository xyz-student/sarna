<?php 
session_start();
include("include/config.php");
include("function.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Sarna Agencies</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/logo.jpg" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->

  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper" style="margin-top: 150px;">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img style="background: white;
height: 80px; padding: 15px;" src="assets/images/logo.jpg" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form method="POST">
			  <div class="form-group">
			  <label class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="email" class="form-control input-shadow" placeholder="Enter Username" autocomplete="off">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			
			 <button type="submit" name="login_submit" class="btn btn-light btn-block">Sign In</button>
			 
			  
			
			 
			 </form>

			 
			 
		   </div>
		  </div>
		 
	     </div>
    
     <!--Start Back To Top Button-->
    
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   
  <!--end color cwitcher-->
	
	</div><!--wrapper-->
<footer class="footer" style="border-bottom: 1px solid rgba(255, 255, 255, 0.12);">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Sarna Agencies | Designed & Developed By <a href="https://www.hedkeyindia.com/"> Hedkey India Pvt. Ltd.</a>
        </div>
      </div>
</footer> 
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>

<!-- Mirrored from codervent.com/dashtreme/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Aug 2019 10:16:53 GMT -->
</html>
