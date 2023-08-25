<?php 
include("include/config.php");
include("menu.php");

?>
<?php
$blg_id = $_GET['id'];
$q="SELECT *FROM `about` WHERE `id`='$blg_id'";
$r=mysqli_query($conn,$q);
while($col=mysqli_fetch_assoc($r))
  {
  	$old_image = $col['image'];
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
                        <div class="card-title">About Edit Form</div>
                        <hr>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="input-26" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="<?php echo $col['title']?>"
                                        class="form-control form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="input-26" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <img src="../assets/img/<?php echo $old_image;?>" height="200px"
                                        width="250px"></img>
                                    <input type="File" name="image" value="<?php echo $old_image;?>"
                                        class="form-control form-control-rounded">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="input-29" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="summernoteEditor" name="des"><?php $str1=(str_replace("<br/>", "\n", $col['des']));
                             $new_string=ltrim($str1);
                             echo $new_string; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-26" class="col-sm-2 col-form-label">Phone No.</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" value="<?php echo $col['phone']?>"
                                        class="form-control form-control-rounded" placeholder="Enter Your Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-26" class="col-sm-2 col-form-label">Email Id</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="<?php echo $col['email']?>"
                                        class="form-control form-control-rounded" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-26" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control form-control-rounded"
                                        placeholder="Enter Your Address"><?php echo $col['address']?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button name="About_update_submit" type="submit"
                                        class="btn btn-white btn-round px-5"><i class="icon-lock"></i> Submit</button>
                                </div>
                            </div><?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php

if(isset($_POST['About_update_submit']))
{
$title=mysqli_real_escape_string($conn,$_POST['title']);
$des=$_POST['des'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
// $mission=$_POST['mission'];
// $vission=$_POST['vission'];

	$image_name = $_FILES['image']['name'];
	$final_img = time().$image_name;
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$logo_path = "../assets/img/".$final_img;

	if ( $image_name!="" ) {
		move_uploaded_file($image_tmp, $logo_path);

 $sql= "UPDATE `about` SET `title`='$title',`des`='$des',`image`='$final_img',`phone`='$phone',`email`='$email',
 `address`='$address' WHERE id='$blg_id' ";
      
		 $run = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
		 if($run==true)
	{	    
		unlink('../assets/img/'.$old_image);
		echo("<script>alert('update succesfully');window.location='about_table.php';</script>");
	}  
        
	}

	else if($image_name=="") {
		$sql= "UPDATE `about` SET `title`='$title',`des`='$des',`image`='$old_image',`phone`='$phone',`email`='$email',
 `address`='$address' WHERE id='$blg_id' ";
      
		 $run = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
		 if($run==true)
			{	    
				echo("<script>alert('update succesfully');window.location='about_table.php';</script>");
			}  
	}


}
	   ?>
        <?php include"footer.php"?>
    </div>