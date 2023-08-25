<?php
session_start();
if (isset($_SESSION['name'])) {
   // echo "done";
}
else{
    header('location:index.php');
}

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
  <!-- Vector CSS -->
  
  
  <!-- simplebar CSS-->
 
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
 
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
   <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css"/>
  
  <!--<link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">-->
  <!--<link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- jquery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!--<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>-->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  
  <!--data table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.1.0/sp-2.1.1/datatables.min.css"/>
 

  
  <style>
	.des p {width:50px; white-space:normal; }
  </style>
  
</head>

<body class="bg-theme bg-theme2">

   

<!-- Start wrapper-->
<div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="dashboard.php">
       <img style="background: white; width: 56px; padding:5px;" src="assets/images/logo.jpg" class="logo-icon" alt="logo icon">
       
     </a>
	</div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      
       <div class="media-body">
	   
       <h6 class="side-user-name">Sarna Agencies</h6>
      </div>
       </div>
    <!--<i class="fa fa-angle-left pull-right">-->
      </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li> 
	<li>
        <a href="slider_display.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>Slider</span></a></li>
		  <li>
		  	       
    <!--    <li><a href="insert_category.php" class="waves-effect">-->
    <!--      <i class="fa fa-tachometer"></i> <span>Add Product Category</span></a>-->
		  <!--</li>     		  -->
    
		<li>
        <a href="about_table.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>About </span></a>
		  </li>
		  <li>		  	
		  	<li>
        <a href="insert_clients.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>Clients</span></a>
		  </li>
		  
		  <!--<li>-->
    <!--    <a href="mail.php" class="waves-effect">-->
    <!--      <i class="fa fa-tachometer"></i> <span>Coustomer Query </span></a>-->
		  <!--</li>-->
	      	  
		    <li>
        <a href="top_category.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>Top Category</span></a>
		  </li>
   
      <li>
        <a href="category_table.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>Category</span></a>
		  </li>
		  
		   <li>
        <a href="sub_category.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>Sub Category</span></a>
		  </li>
	

      <li>
        <a href="category_products.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>Products</span></a>
		  </li>

     
	      
      <li>
        <a href="product_table2.php" class="waves-effect">
          <i class="fa fa-tachometer"></i> <span>Kerosene Heater Products</span></a>
		  </li>
		  
	    </ul>
   
   </div>
   
			<header class="topbar-nav">
				 <nav class="navbar navbar-expand fixed-top">
				  <ul class="navbar-nav mr-auto align-items-center">
					<li class="nav-item">
					  <a class="nav-link toggle-menu" href="javascript:void();">
					   <i class="fa fa-bars"></i>
					 </a>
					</li>
				   
				  </ul>
					 
				  <ul class="navbar-nav align-items-center right-nav-link">
					
					<li class="nav-item">
					  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
						<span class="user-profile"><i class="fa fa-user" aria-hidden="true"></i>
				</span>
					  </a>
					  <ul class="dropdown-menu dropdown-menu-right">
					   <li class="dropdown-item user-details">
						<a href="javaScript:void();">
						   <div class="media">
							<div class="media-body">
							<h6 class="mt-2 user-title">Sarna Agensies</h6>
							<p class="user-subtitle"> admin@gmail.com </p>
							</div>
						   </div>
						  </a>
						</li>
						<li class="dropdown-divider"></li>
						
						<li class="dropdown-divider"></li>
						<li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php"> Logout</a></li>

					  </ul>
					</li>
				  </ul>
				</nav>
			</header>
	
	</div>   



  <!-- Bootstrap core JavaScript-->
 
 
</body>


</html>
