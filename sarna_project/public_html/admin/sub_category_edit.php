<?php 
include"include/config.php";
include"menu.php";

?>
<style>
.note-editor.note-frame .note-editing-area .note-editable {
	height: 250px !important;
}
</style>
<div class="clearfix"></div>

<?php 
$get_id = $_GET['id'];

    $select1 = "SELECT * FROM sub_category WHERE id='$get_id'";
    $query1 = mysqli_query($conn,$select1);
    while($row1 = mysqli_fetch_array($query1)) {
    	$id = $row1['id'];
    	$title = $row1['sub_category_name'];
    	$desc = $row1['description'];
    	$cat_id = $row1['category_id'];
    	$old_img1 = $row1['image'];
?>
	
  <div class="content-wrapper">
    <div class="container-fluid">

			<div class="row">
			<div class="col-lg-12">
			<div class="card">
				   <div class="card-body">
				   <div class="card-title">Update Sub Category</div>
				   <hr>
				<form method="POST" enctype="multipart/form-data">
				    <div class="form-group row">
					<label for="input-26" class="col-sm-2 col-form-label">Sub Category Name</label>
					<div class="col-sm-10">
					 	<input type="text" name="title" class="form-control" value="<?=$row1['sub_category_name'];?>">
					</div>
				  </div>
				  
				<div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Main Image</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control" name="image1" value="<?=$row1['image'];?>">
                  </div>
                  <div class="col-sm-4">
                  	<img src="../assets/img/<?=$row1['image'];?>" style="width:60px;">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Select Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="cat_name">
                    	<?php 
                            $select1 = "SELECT * FROM category WHERE id='$cat_id'";
                            $query1 = mysqli_query($conn,$select1);
                            while($row1 = mysqli_fetch_array($query1)) {
                            	$cat_name = $row1['title'];
                            	$category_id = $row1['id'];
                        ?>
                    	<option selected value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                    <?php } 
                            $select1 = "SELECT * FROM category";
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
					<label for="input-29" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
					<textarea id="summernoteEditor" name="description"><?php echo $desc; ?></textarea>
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
    $desc=$_POST['description'];
	$cat_name=$_POST['cat_name'];
	$image1 = $_FILES['image1']['name'];
	$final_img1 = time().$image1;
	$image_tmp1 = $_FILES['image1']['tmp_name'];
	$logo_path1 = "../assets/img/".$final_img1;

	if($image1!="")
	{
		move_uploaded_file($image_tmp1,$logo_path1);
	
$sql="UPDATE `sub_category` SET `sub_category_name`='$title',`image`='$final_img1',`category_id`='$cat_name',`description` = '$desc' WHERE id='$get_id'";

	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($query)
	{
		unlink('../assets/img/'.$old_img1);
		echo("<script>alert('Update succesfully ');window.location='sub_category.php';</script>");
	}
}
else if($image=="") {
	$sql="UPDATE `sub_category` SET `sub_category_name`='$title',`image`='$old_img1',`category_id`='$cat_name',`description` = '$desc'  WHERE id='$get_id'";
	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($query)
	{
		echo("<script>alert('Update succesfully ');window.location='sub_category.php';</script>");
	}
}

}
}

?>		
<?php include "footer.php"?>
		</div>
		
 
		
	