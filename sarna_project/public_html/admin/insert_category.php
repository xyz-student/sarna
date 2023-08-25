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
				   <div class="card-title">Insert Category</div>
				   <hr>
				<form action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group row">
					<label for="input-26" class="col-sm-2 col-form-label">Category Name</label>
					<div class="col-sm-10">
					 	<input type="text" name="title" class="form-control">
					</div>
				  </div>
				  
				<div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control" name="image" required>
                  </div>
                </div>
                
                 <div class="form-group row">
                                <label for="input-8" class="col-sm-2 col-form-label">Add to top Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="top_category" id="category-dropdown">
                                        <option disabled="" selected="">Top Category</option>
                                        <?php 
                            //   include('dbconn.php');

                              $sql = "SELECT * FROM `top_category`";
                            $result = mysqli_query($conn, $sql) or die("query failed");

                            if(mysqli_num_rows($result) > 0){ 
                            while($row = mysqli_fetch_assoc($result)){
                                echo"<option value='{$row['id']}'>{$row['title']}</option>";
                            }
                            }
                              ?>
                                    </select>
                                </div>
                            </div>
                	
			  </div>			  
				 
				   <div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
					<button name="Product_submit" type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>Submit</button>
					</div>
				  </div>
				   </form>
				 </div>
				</div>
			</div>
			</div>
			<?php

if(isset($_POST['Product_submit']))
{
	$id=$_POST['id'];
    $title=$_POST['title'];
      $top_category=$_POST['top_category'];
    
	 
	$image_name = $_FILES['image']['name'];
	$final_img = time().$image_name;
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$logo_path = "../assets/img/".$final_img;
	
	if($image_name!=="")
	{
		if($image_type="image/png" && "image/jpg" && "image/jpeg")
		{
		
		move_uploaded_file($image_tmp,$logo_path);

$sql="INSERT INTO `category`(`title`,`image`,`top_category`) VALUES ('$title','$final_img','$top_category')";



	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($query)
	{
		 echo("<script>alert('Insert succesfully');window.location='category_table.php';</script>");
	}
	else
	{
		echo("<script>alert('Not Created Product');window.location='insert_product.php';</script>");
	}
		}
	}
}

?>		
<?php include"footer.php"?>
		</div>
		
 
		
	