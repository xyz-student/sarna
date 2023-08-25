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
            <div class="card-header"><i class="fa fa-table"></i> Query Table</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="" class="table table-bordered">
                <thead>
                    <tr>
                         <th>Customer Name</th>
                        <th>Mobile No.</th>
                          <th>Email</th>	
						              <th>Address</th>
                        <th>Message</th>
						          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				 <?php 
				 
     $db = $GLOBALS['conn'];
    $query = "SELECT * FROM `enquires` order by id desc";
    $Product_data = mysqli_query($db, $query);

if(mysqli_num_rows($Product_data) > 0 ) {
    
    while ($row = mysqli_fetch_assoc($Product_data)) {
     
        $name=$row['name'];
        $email=$row['email'];
				$phone=$row['phone'];
        $address=$row['address'];
        $message=$row['message'];
				$id=$row['id'];
?>
                    <tr>
                        
                         <td ><div style="max-height: 100px; white-space: pre-line; "><?php echo $name; ?></div></td>
						 <td><div style="max-height: 100px; white-space: pre-line; "><?php echo $email;?></div></td>
                        <td><div style="max-height: 100px; white-space: pre-line; "><?php echo $phone;?></div></td>
						  <td><div style="max-height: 100px; white-space: pre-line; "><?php echo $address;?></div></td>
						  <td><div style="max-height: 100px; white-space: pre-line; "><?php echo $message;?></div></td>
						 
						<?php echo'
                        <td>
						<a href="delete_mail.php?id='.$id.'"><i class="fa fa-trash-o"></a></td>
                    </tr>';
              }
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
	
<?php include"footer.php"?>
		</div>