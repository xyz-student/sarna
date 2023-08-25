<?php 
include("include/config.php");
include("menu.php");

?>
<style>
.note-editor.note-frame .note-editing-area .note-editable {
	height: 250px !important;
}
</style>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

			<div class="row">
			<div class="col-lg-12">
			<div class="card">
				   <div class="card-body">
				   <div class="card-title">Insert Products</div>
				   <hr>
				<form method="POST" enctype="multipart/form-data">
				    <div class="form-group row">
					<label for="input-26" class="col-sm-2 col-form-label">Product Name</label>
					<div class="col-sm-10">
					 	<input type="text" name="title" class="form-control">
					</div>
				  </div>
				  
				<div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Main Image</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control" name="image1" required>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Select Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="cat_name">
                    	<option disabled="" selected="">Select Category</option>
                    	<?php 
                            $select1 = "SELECT * FROM `category`";
                            $query1 = mysqli_query($conn,$select1);
                            while($row1 = mysqli_fetch_array($query1)) {
                            	$cat_name = $row1['title'];
                            	$cat_id = $row1['id'];
                        ?>
                    	<option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                				 
				  	<div class="form-group row">
					<label for="input-29" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
					<textarea id="summernoteEditor" name="desc"></textarea>
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
    $title=$_POST['title'];
    $desc=$_POST['desc'];
	$cat_name=$_POST['cat_name'];
	 
	$image1 = $_FILES['image1']['name'];
	$final_img1 = time().$image1;
	$image_tmp1 = $_FILES['image1']['tmp_name'];
	$logo_path1 = "../assets/img/".$final_img1;
	
	if($image1!=="")
	{		
		move_uploaded_file($image_tmp1,$logo_path1);

$sql="INSERT INTO `product2`(`title2`, `img2`, `des2`, `cat_id2`) VALUES ('$title','$final_img1','$desc','$cat_name')";
	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// echo $query;
// exit();
	if($query)
	{
		 echo("<script>alert('Insert succesfully');window.location='product_table2.php';</script>");
	}
	else
	{
		echo("<script>alert('Insert Failed');window.location='insert_product2.php';</script>");
	}
	}
}


?>		
<?php include("footer.php")?>
		</div>
		
 
		
	