<?php 
include"include/config.php";
include"menu.php";

?>
<?php
$get_id = $_GET['cat_id'];
//exit;
$q="SELECT * FROM category WHERE id='$get_id'";
$r=mysqli_query($conn,$q);
while($col=mysqli_fetch_array($r))
  {
     $cat_name = $col['title'];
	$cat_id = $col['id'];    	 
	$old_image = $col['image'];    	 
?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

			


			<div class="row">
			<div class="col-lg-12">
			<div class="card">
				   <div class="card-body">
				   <div class="card-title">Update Category</div>
				   <hr>
				<form action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group row">
					<label for="input-26" class="col-sm-2 col-form-label">Category Name</label>
					<div class="col-sm-10">
					 	<input type="text" name="title" class="form-control" value="<?=$cat_name;?>">
					</div>
				  </div>
				  
				<div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control" name="image">
                    <img src="../assets/img/<?=$old_image;?>" style="width:100px; margin-top: 20px;">
                  </div>
                </div>
                
                  <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Select top Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="cat_name">
                    	<?php 
                            $select1 = "SELECT * FROM `top_category` WHERE id='$cat_id'";
                            $query1 = mysqli_query($conn,$select1);
                            while($row1 = mysqli_fetch_array($query1)) {
                            	$cat_name = $row1['title'];
                            	$category_id = $row1['id'];
                        ?>
                    	<option selected value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>

                    <?php } 
                            $select1 = "SELECT * FROM `top_category`";
                            $query1 = mysqli_query($conn,$select1);
                            while($row1 = mysqli_fetch_array($query1)) {
                            	$cat_name = $row1['title'];
                            	$category_id = $row1['id'];
                        ?>
                    	<option value="<?php echo $category_id; ?>"><?php echo $cat_name; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
				   <div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
					<button name="Category_update_submit" type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>Submit</button>
					</div>
				  </div>
				   </form>
				 </div>
				</div>
			</div>
			</div>
		</div>
			<?php

if(isset($_POST['Category_update_submit']))
{
	// $id=$_POST['id'];
    $title=$_POST['title'];
    	$cat_name=$_POST['cat_name'];
	 
	$image_name = $_FILES['image']['name'];
	$final_img = time().$image_name;
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$logo_path = "../assets/img/".$final_img;
	$old_image = $col['image'];
	
	if( $image_name!=="")
{
move_uploaded_file($image_tmp,$logo_path);

  $sql="UPDATE `category` SET `title`='$title',`image`='$final_img',`top_category`='$cat_name' WHERE id='$get_id'";
  
  $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));  
  // echo $query;
  // exit();
  if($query)
  {
  	unlink('../assets/img/'.$old_image);
	  echo "<script>alert('update succesfully');window.location='category_table.php';</script>";
  }
}
else if($image_name == "") {
	$sql="UPDATE `category` SET `title`='$title',`image`='$old_image',`top_category`='$cat_name' WHERE id='$get_id'";
  
	  $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	  if($query)
	  {
		  echo "<script>alert('update succesfully ');window.location='category_table.php';</script>";
	  }
	  }
}
}
				
?>		
<?php include"footer.php"?>
		</div>
		
 
		
	