<?php 
include"include/config.php";
include"menu.php";
if(isset($_GET['page'])){
  $page=$_GET['page'];
}
else{
  $page=1;
}
$post_per_page=3;
$result=($page-1) * $post_per_page;


?>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Category Table</div>
                    <div class="card-body">
                         <!-- pagination start ******************************   -->
             <?php 
    
    $q="SELECT * FROM `category`";
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
                <!-- pagination end ******************* -->
                        <div class="table-responsive">
                            <a href="insert_category.php" class="btn btn-success" style="float:right;">Insert
                                Category</a>
                            <table id="" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Top category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
    $query = "SELECT * FROM `category` order by id DESC LIMIT $result, $post_per_page";
    
//     $sql ="SELECT category.id, category.title, category.image,category.top_category,top_category.top_cat_name
// FROM category
// LEFT JOIN top_category ON category.top_category=top_category.id order by id DESC";
    
    $Product_data = mysqli_query($conn, $query) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($Product_data))
      {
        $id=$row['id'];
        $title=$row['title'];
        $img=$row['image'];
        $top_category = $row['top_category'];
?>
                                    <tr>

                                        <td>
                                            <div style="max-height: 100px; white-space: pre-line; "><?php echo $id; ?>
                                            </div>
                                        </td>

                                        <td>
                                            <div style="max-height: 100px; white-space: pre-line; ">
                                                <?php echo $title; ?></div>
                                        </td>
                                        <td><img src="../assets/img/<?php echo $img;?>" width="100px" height="70px">
                                        </td>

                                        <td><?php echo $top_category ;?></td>


                                        <?php echo'
                        <td><a href="category_edit.php?cat_id='.$id.'"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
            <a href="delete_category.php?cat_id='.$id.'"><i class="fa fa-trash-o"></a></td>
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

    <?php include"footer.php"?>
</div>