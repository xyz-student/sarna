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
                    <div class="card-header"><i class="fa fa-table"></i> About Table</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
				 
    $db = $GLOBALS['conn'];
    $query = "SELECT * FROM `about` order by id desc";
    $About_data = mysqli_query($db, $query);

if(mysqli_num_rows($About_data) > 0 ) {
    
    while ($About_rows = mysqli_fetch_assoc($About_data)) {
        $id = $About_rows['id'];
        $phone = $About_rows['phone'];
        $email = $About_rows['email'];
        $address = $About_rows['address'];
        $title = $About_rows['title'];       
        $des = $About_rows['des'];
        $image = $About_rows['image'];
?>
                                    <tr>
                                        <td>
                                            <div style="white-space: normal;"><?php echo $title; ?></div>
                                        </td>
                                        <td><?php echo substr($phone,0,10); ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td style="white-space: normal;"><?php echo $address; ?></td>

                                        <td>
                                            <div style="white-space: normal;"> <?php echo substr( $About_rows['des'],0,130) . "..."; ?></div>
                                        </td>

                                        <td><img src="../assets/img/<?=$image?>" style="width:100px"></td>


                                        <?php echo'
                        <td><a href="about_edit.php?id='.$id.'"><i class="fa fa-pencil"></i></a></td>
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

    <?php include("footer.php")?>
</div>