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
                <a href="insert_products.php" class="btn btn-success" style="float:right;">Insert Products</a>
              <br><br>
              <table  class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				 <?php 
    $query = "SELECT * FROM `products` order by id DESC";
    $Product_data = mysqli_query($conn, $query) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($Product_data))
      {
				$id=$row['id'];
        $title=$row['title'];
        $image=$row['img1'];
        $des=$row['des'];    
				$cat_id=$row['cat_id'];    
?>
                    <tr>
                        
                         <td ><div style="max-height: 100px; white-space: pre-line; "><?php echo $title; ?></div></td>
                       
                        <td><img src="../assets/img/<?php echo $image;?>" width="100px" height="70px"></td>
                    
                    <td><?php echo substr($des,0,25) . "..."; ?></td>  
                    
                    <td>
                        <div style="max-height: 100px; white-space: pre-line; ">
                      <?php 

                          $select1 = "SELECT * FROM category WHERE id='$cat_id'";
                          $query1 = mysqli_query($conn,$select1);
                          while($row1 = mysqli_fetch_array($query1)) {
                            $cat_name = $row1['title'];
                            $cat_id = $row1['id'];
                          }
                            echo $cat_name;
                      ?>
                      </div>
                    </td>       
						
						<?php echo'
                        <td><a href="product_update.php?id='.$id.'"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="product_delete.php?id='.$id.'"><i class="fa fa-trash-o"></a></td>
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
    