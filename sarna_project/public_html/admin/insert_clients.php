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
				   <div class="card-title" style="float:left;">Clients Insert</div>
				   <a href="clients_table.php" class="btn btn-success" style="float:right;">Clients Table</a>
				   <br>
				   <hr>
				<form action="" method="POST" enctype="multipart/form-data">
				     
				   <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-4">
                    <input type="file" name="img[]" multiple="" class="form-control">
                  </div>
                </div>
				
                </div>
                <div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
					<button name="submit" type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i> Submit</button>
					</div>
				  </div>
				
			  </div>		
				 
				   
				   </form>
				 </div>
				</div>
			</div>
			</div>
			<?php

if(isset($_POST['submit']))
{
	
	for($i=0;$i<count($_FILES['img']['name']);$i++)
	{
	// $status=$_POST['status'][$i];
	// $room_type=$_POST['room_cat'][$i];
	
	$image1=$_FILES['img']['name'][$i];
	$final_img = time().$image1;
	$image2=$_FILES['img']['tmp_name'][$i];
	$filepath="../assets/img/clients/".$final_img;
	
	if($image1!=="")
	{
	
	move_uploaded_file($image2,$filepath);
                  $sql="INSERT INTO `clients`(`image`)VALUES('$final_img')";
					$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
				  if($query)
				  {
			echo "<script>alert('Image Uploaded');window.location='clients_table.php';</script>";			
	}
	else
		{
			echo "<script>alert('Please Select Image');</script>";
		}	
}
}
}

?>		
<?php include"footer.php"?>
		</div>
		
 
		
	