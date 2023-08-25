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
				   <div class="card-title">About Form</div>
				   <hr>
				<form action="" method="POST" enctype="multipart/form-data">
				   <div class="form-group row">
					<label for="input-26" class="col-sm-2 col-form-label">Title</label>
					<div class="col-sm-10">
					<input type="text" name="title" class="form-control form-control" placeholder="Enter Your Name">
					</div>
				  </div>
				 
				  <div class="form-group row">
					<label for="input-29" class="col-sm-2 col-form-label">Description</label>
					<div class="col-sm-10">
					<textarea id="summernoteEditor" name="des"></textarea>
					</div>
				  </div>
				 
				  
				
			  </div>		
				 
				   <div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
					<button name="About_submit" type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i> Submit</button>
					</div>
				  </div>
				   </form>
				 </div>
				</div>
			</div>
			</div>
			<?php

if(isset($_POST['About_submit']))
{

    $title=$_POST['title'];
   $des=$_POST['des'];
   
   
 


	


		

		
				
			
                  
					$q=$conn->prepare("INSERT INTO about(title,des) values(?,?)");
				 
                    $q->bind_param("ss",$title,$des);
                   
					$q->execute();
					$q->close();
					$conn->close();
			       
					if ($q) {
					    
						        echo("<script>alert('Insert succesfully');window.location='about_table.php';</script>");

					}
				

			else{
			echo "<script>alert('Image size is exceed 500kb');</script>";
		}	

		
	
	
}
?>		
<?php include"footer.php"?>
		</div>
		
 
		
	