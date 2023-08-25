<?php 
include("include/config.php");
include("menu.php");

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

			<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Product Table</div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="insert_product3.php" class="btn btn-success" style="float:right;">Insert Products</a>
              <br><br>
              <table id="" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <!-- <th>Category Name</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				 <?php 
    $query = "SELECT * FROM `product3` order by id DESC";
    $Product_data = mysqli_query($conn, $query) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($Product_data))
      {
				$id=$row['id'];
        $title=$row['title3'];
        $image=$row['img3'];
        $des=$row['des3'];    
				$cat_id=$row['cat_id3'];    
?>
                    <tr>
                        
                         <td ><div style="max-height: 100px; white-space: pre-line; "><?php echo $title; ?></div></td>
                       
                        <td><img src="../assets/img/<?php echo $image;?>" width="100px" height="70px"></td>
                    
                    <td><?php echo substr($des,0,40); ?></td>     
                        
						
						<?php echo'
                        <td><a href="product_update3.php?id='.$id.'"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="product_delete3.php?id='.$id.'"><i class="fa fa-trash-o"></a></td>
                    </tr>';
              
}
	
	?>   
                    
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
			</div>
	
<?php include("footer.php")?>
		</div>