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
            <div class="card-header"><i class="fa fa-table"></i>Clients Table</div>
            <div class="card-body">
              <a href="insert_clients.php" class="btn btn-success" style="float:right;">Clients Images</a>
              <br><br>
              <div class="table-responsive">
              <table id="" class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				 <?php 
				 
    $db = $GLOBALS['conn'];
    $sql = "SELECT * FROM `clients` order by id desc";
    $query = mysqli_query($db, $sql) or die(mysqli_error($conn));
if(mysqli_num_rows($query) > 0 )
	{
    
    while ($row = mysqli_fetch_array($query))
		{ 	
      $id=$row['id'];
			$img=$row['image'];
?>
                    <tr>
						
						<td><img src="../assets/img/clients/<?php echo $img; ?>" width="100px" height="70px">
						</td>                      
						<?php echo'
                        <td>
						<a href="clients_delete.php?id='.$id.'"><i class="fa fa-trash-o"></a></td>
                    </tr>';
              }
}
	
	?>   
                    
                </tbody>
                <tfoot>
                    <tr>
                   	<th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
			</div>
	
<?php include "footer.php" ?>
		</div>