<?php 
include("include/config.php");
include("menu.php");
if(isset($_GET['page'])){
  $page=$_GET['page'];
}
else{
  $page=1;
}
$post_per_page=3;
$result=($page-1) * $post_per_page;
?>

<?php
                     
if(isset($_GET['search'])){
$search_term= mysqli_real_escape_string($conn,$_GET['search']);
                
}

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

			<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Product Table</div>
                 <form class="search-post w-100 d-flex justify-content-end" action="search.php" method ="GET">
            <div class="input-group w-25">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
            <div class="card-body">
                
                  <!-- pagination start ******************************   -->
             <?php 
    
    $q="SELECT * FROM `products`";
    $r=mysqli_query($conn,$q);
    $total_post=mysqli_num_rows($r);
    $total_pages=ceil($total_post/$post_per_page);

    ?>

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
        if($page>1){
            $switch="";
        }
        else{
            $switch="disabled";
        }
        if($page>=$total_pages){
            $nswitch="disabled";
        }
        else{
            $nswitch="";
        }
        ?>

                        <li class="page-item <?php echo $switch; ?>"><a class="page-link"
                                href="?page=<?php echo $page-1; ?>">Previous</a></li>

                        <?php 
        for($kpage=1;$kpage<=$total_pages;$kpage++){
            ?>
                        <li class="page-item"><a class="page-link"
                                href="?page=<?php echo $kpage; ?>"><?php echo $kpage; ?></a></li>
                        <?php
        }
        ?>

                        <li class="page-item <?php echo $nswitch; ?>"><a class="page-link"
                                href="?page=<?php echo $page+1; ?>">Next</a></li>
                    </ul>
                </nav>
                <!-- pagination end ******************************   -->
                
              <div class="table-responsive">
                <a href="insert_category_products.php" class="btn btn-success" style="float:right;">Insert Products</a>
              <br><br>
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Category Name</th>
                        <th>Sub Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				
				 <?php 
    $query = "SELECT * FROM `products` WHERE title LIKE '%{$search_term}%' OR des LIKE '%{$search_term}%'  order by id DESC LIMIT $result, $post_per_page";
    $Product_data = mysqli_query($conn, $query) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($Product_data))
      {
				$id=$row['id'];
        $title=$row['title'];
        $image=$row['img1'];
        $des=$row['des'];    
				$cat_id=$row['cat_id'];

        $sub_cat_id=$row['sub_cat_id'];
?>
                    <tr>
                        
                         <td ><div style="max-height: 100px; white-space: pre-line; "><?php echo $title; ?></div></td>
                       
                        <td><img src="../assets/img/<?php echo $image;?>" width="100px" height="70px"></td>
                    
                    <td>
                        <div>
                            <?php echo substr($des ,0,25). "...";?>
                        </div>
                        </td>     
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
                  
                    <td>      
                    <div style="max-height: 100px; white-space: pre-line; ">
                       <?php 

                          $select2 = "SELECT * FROM `sub_category` WHERE `id`='$sub_cat_id'";
                          $query2 = mysqli_query($conn,$select2);
                          while($row2 = mysqli_fetch_array($query2)) {
                            $cat_name2 = $row2['sub_category_name'];
                            $sub_cat_id = $row2['id'];
                          }
                            echo $cat_name2;
                      ?>
                      </div>
                    </td>  

                     
						
						<?php echo'
                        <td><a href="category_products_update.php?id='.$id.'"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;

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
    