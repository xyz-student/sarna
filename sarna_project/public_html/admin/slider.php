<?php 
include"include/config.php";
include"menu.php";

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

			<div class="row">
			<div class="col-lg-12">
			<div class="card">
				   <div class="card-body">
				   <div class="card-title">Image Form
				   	<a href="slider_display.php" class="btn btn-success" style="float:right;">All Slider</a>
				   </div>

				   <hr>
				   	 <?php 
				 
					$db = $GLOBALS['conn'];
					?>
				<form action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group row">
					<label for="input-26" class="col-sm-2 col-form-label">Slider Name</label>
					<div class="col-sm-10">
					 	<input type="text" name="name" class="form-control">
					</div>
				  </div>
								 
				  <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control" name="image" required>
                  </div>
                </div>
                
				   <div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
					<button name="Product_submit" type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>Submit</button>
					</div>
				  </div>
				   </form>
					<?php // } ?>
				 </div>
				</div>
			</div>
			</div>
<?php
if(isset($_POST['Product_submit']))
{
   
    $name=$_POST['name']; 

	$image_name1 = $_FILES['image']['name'];
	$final_img1 = time().$image_name1;
	$image_type1 = $_FILES['image']['type'];
	$image_size1 = $_FILES['image']['size'];
	$image_tmp1 = $_FILES['image']['tmp_name'];
	$logo_path1 = "../assets/img/".$final_img1;	
	

	if ( $image_name1!="")
	{
		move_uploaded_file($image_tmp1, $logo_path1);
		$sqlu="INSERT INTO banner (`image`,`name`) VALUES ('$final_img1','$name')";				
		$queryu=mysqli_query($conn,$sqlu) or die(mysqli_error($conn));			       
		if ($queryu) {			    
		    echo("<script>alert('Insert succesfully');window.location='slider_display.php';</script>");
		}
	}

			else{
		echo "<script>alert('Please choose a file');</script>";
	}
	
	
	}	

	
?>		
<?php include"footer.php"?>
		</div>
		
 
		
	