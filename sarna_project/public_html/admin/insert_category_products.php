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
                                    <select class="form-control" name="cat_name" id="category-dropdown">
                                        <option disabled="" selected="">Select Category</option>
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

                                        <option disabled="" selected="">Select Sub Category</option>

                                        <?php 
                          

                            //   $sql = "SELECT sub_category.sub_category_name,sub_category.image,sub_category.category_id,category.id FROM sub_category
                            //   LEFT JOIN category ON sub_category.category_id = category.id
                            //   WHERE sub_category.category = category.id

                            //   ORDER BY  sub_category.sub_category_name";

                            // $sql = "SELECT sub_category.sub_category_name,sub_category.category_id,category.id 
                            // FROM sub_category
                            // LEFT JOIN category ON sub_category.category_id = category.id
                            // WHERE sub_category.category_id = category.id 
                            // ORDER BY sub_category.sub_category_name
                            // ";
                            // $result = mysqli_query($conn, $sql) or die("query failed");

                            // if(mysqli_num_rows($result) > 0){ 
                            // while($row = mysqli_fetch_assoc($result)){
                                    
                            //        if(isset($_POST['category_id'])){
                            //         echo"<option value='{$row['category_id']}'>{$row['sub_category_name']}</option>";
                            //        }
                             
                            //        else{
                            //         echo"<option value=''></option>";
                            //        }
                            // }
                            // }

                            // else{
                            //     echo"<option value=''></option>";
                            // }
                              ?>
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
                                    <button name="Product_submit" type="submit" class="btn btn-white btn-round px-5"><i
                                            class="icon-lock"></i>Submit</button>
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
	
	if($image1!=="")
	{		
		move_uploaded_file($image_tmp1,$logo_path1);

$sql="INSERT INTO `products`(`title`,`img1`,`des`,`cat_id`,`sub_cat_id`) VALUES ('$title','$final_img1','$desc','$cat_name',$sub_cat_name);";

    
$sql .= "UPDATE `category` SET `products` = `products` + 1 WHERE `id` = {$cat_name}";

if(mysqli_multi_query($conn,$sql)){
    echo"<script>alert('successfully inserted the data');</script>";
    echo"<script>alert('Insert succesfully');window.location='category_products.php';</script>";
}else{
    echo"<script>alert('Insert Failed');window.location='insert_category_products.php';</script>";
}


	// $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));

// echo $query;
// exit();
	// if($query)
	// {
	// 	 echo("<script>alert('Insert succesfully');window.location='category_products.php';</script>");
	// }
	// else
	// {
	// 	echo("<script>alert('Insert Failed');window.location='insert_category_products.php';</script>");
	// }
	}
}


?>
        <?php include"footer.php"?>

		
    </div>