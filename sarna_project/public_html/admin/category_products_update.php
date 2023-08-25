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
    $select1 = "SELECT products.*,

	category.id,category.title as cat_name,
	
	sub_category.sub_category_name
	
	FROM products
	LEFT JOIN category ON products.cat_id = category.id
	LEFT JOIN sub_category ON products.sub_cat_id = sub_category.id
	
	 WHERE products.id='$get_id'
	";
    $query1 = mysqli_query($conn,$select1);
    while($row1 = mysqli_fetch_array($query1)) {
    	$id = $row1['id'];
    	$title = $row1['title'];
    	$desc = $row1['des'];
    $cat_id = $row1['cat_name'];

    	$sub_cat_id = $row1['sub_category_name'];

    	$old_img1 = $row1['img1'];
?>
	
  <div class="content-wrapper">
    <div class="container-fluid">

			<div class="row">
			<div class="col-lg-12">
			<div class="card">
				   <div class="card-body">
				   <div class="card-title">Update Products</div>
				   <hr>
				<form method="POST" enctype="multipart/form-data">
				    <div class="form-group row">
					<label for="input-26" class="col-sm-2 col-form-label">Product Name</label>
					<div class="col-sm-10">
					 	<input type="text" name="title" class="form-control" value="<?=$row1['title'];?>">
					</div>
				  </div>
				  
				<div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Main Image</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control" name="image1" value="<?=$row1['img1'];?>">
                  </div>
                  <div class="col-sm-4">
                  	<img src="../assets/img/<?=$row1['img1'];?>" style="width:60px;">
                  </div>
                </div>

              <div class="form-group row">
                                <label for="input-8" class="col-sm-2 col-form-label">Select Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="cat_name" id="category-dropdown">
                                        <option disabled="" selected="" value="<?php echo $cat_id; ?>"><?php echo $cat_id; ?></option>
                                        <?php 
                            //   include('dbconn.php');

                              $sql = "SELECT * FROM `category`";
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
 

							<div class="form-group row">
                                <label for="input-8" class="col-sm-2 col-form-label">Select Sub Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="sub_cat_name" id="sub-category-dropdown">

                                        <option disabled="" selected=""><?php echo $sub_cat_id; ?></option>

                                        <?php 
                        
                              ?>
                                    </select>

									
                                </div>
                            </div>
				
				
				  	<div class="form-group row">
					<label for="input-29" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
					<textarea id="summernoteEditor" name="desc"><?php echo $desc; ?></textarea>
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
	$sub_cat_name=$_POST['sub_cat_name'];

	$image1 = $_FILES['image1']['name'];
	$final_img1 = time().$image1;
	$image_tmp1 = $_FILES['image1']['tmp_name'];
	$logo_path1 = "../assets/img/".$final_img1;

	if($image1!="")
	{
		move_uploaded_file($image_tmp1,$logo_path1);
	
$sql="UPDATE `products` SET `title`='$title',`img1`='$final_img1',`des`='$desc',`cat_id`='$cat_name',`sub_cat_id`='$sub_cat_name' WHERE id='$get_id'";
	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($query)
	{
		unlink('../assets/img/'.$old_img1);
		echo("<script>alert('Update succesfully ');window.location='category_products.php';</script>");
	}
}
else if($image=="") {
	$sql="UPDATE `products` SET `title`='$title',`img1`='$old_img1',`des`='$desc',`cat_id`='$cat_name',`sub_cat_id`='$sub_cat_name' WHERE id='$get_id'";
	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($query)
	{
		echo("<script>alert('Update succesfully ');window.location='category_products.php';</script>");
	}
}

}
}

?>		
<?php include "footer.php"?>
		</div>
		
 
		
	