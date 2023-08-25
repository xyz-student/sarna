                             <?php include('include/header.php');

$get_id = $_GET['id'];  
$select = "SELECT * FROM category WHERE id='$get_id'";
$query = mysqli_query($conn,$select);
while($row = mysqli_fetch_array($query)) {
    $c_id = $row['id']; 
    $title = $row['title']; 

?>
<div class="breadcrumbs_area commun_bread commun_bread_about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3><?php echo $title; ?></h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><?php echo $title; ?></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 } 
?>

<div class="container">
    <div class="row">

    </div>
</div>
 <div class="product_details_action">                                   
                                <div class="product_action_link mx-5 w-75 d-flex justify-content-end">
                                    <ul>
                                         <li class="product_cart"><a href="index.php">Back</a></li>
                                         
                                    </ul>
                                </div>
                            </div>

<section class="all-products">
    <div class="container">
        <div class="row">
           
           <div class="col-md-9">
                <div class="row">
                <?php
                        // include "config.php";

                        if(isset($_GET['id'])){
                            $cat_id= $_GET['id'];
                        }     

                        $sql = "SELECT * FROM `sub_category` WHERE `category_id` = '$cat_id'";

                         $result = mysqli_query($conn, $sql) or die("query failed");

                         if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>

                    <div class="col-md-5 mt-2" style="border-bottom: 1px solid grey;">
                        
                        <div class="single_product pb-2" style="height:350px; width:300px; border:none;">
                            <div class="product_thumb">
                                <a href="burner.php?product_id=<?php echo $row['id']; ?>"><img src="assets/img/<?php echo $row['image']; ?>" height="100%" width="75%" alt="" ></a>
                            </div>
                           
                        </div>
                    </div>

                     <div class ="col-md-7 mt-2" style="border-bottom: 1px solid grey;">
                          <div class="product_content">
                                <h3><a href="burner.php?product_id=<?php echo $row['id'];?>">
                                    <?php echo $row['sub_category_name']; ?></a></h3>
                                  <div style="height:400px; width="500px">
                                   <p style=" width:100%; height=100%"><?php echo $row['description']; ?></p></div>
                            </div>
                     </div>
                    <?php 
                            }
                        }
                    ?>
                </div>
            </div>

            <div class="col-md-3">
                <?php include('include/sidebar.php') ?>
            </div>


        </div>
    </div>
</section>


<?php include('include/footer.php'); ?>