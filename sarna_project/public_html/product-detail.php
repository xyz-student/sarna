<?php include('include/header.php');
$get_id = $_GET['id'];
$select = "SELECT * FROM `product2` WHERE id = '$get_id'";
$query = mysqli_query($conn,$select);
while($row = mysqli_fetch_array($query)) {
    $id = $row['id']; 
    $pro_title = $row['title2']; 
    $c_id = $row['cat_id2']; 

    // $select1 = "SELECT * FROM category WHERE id = '$c_id'";
    // $query1 = mysqli_query($conn,$select1);
    // while($row1 = mysqli_fetch_array($query1)) {        
?>

<style>
.product_description ul, .product_description ul li {
    list-style: circle;
}
</style>
<div class="breadcrumbs_area commun_bread commun_bread_about">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3><?php echo $pro_title; ?></h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><?php echo $pro_title; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>


<div class="single_product_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="exzoom hidden" id="exzoom">
                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    <li><img src="assets/img/<?=$row['img2'];?>"/></li>
                                   
                                    <!-- 
                                    <li><img src="assets/img/product/p2.jpg"/></li>
                                    <li><img src="assets/img/product/p3.jpg"/></li>
                                    <li><img src="assets/img/product/p4.jpg"/></li>
                                    <li><img src="assets/img/product/p5.jpg"/></li> -->
                                </ul>
                            </div>
                            <!-- <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p> -->
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product_details">
                            <h3><?php echo $pro_title; ?></h3>
                            <span class="old_price" style="color:#0aa4e3;"><?php echo $row['title2']; ?></span>
                           <div class="product_description">
                               <p><?php echo $row['des2']; ?></p>
                           </div>
                            <div class="product_details_action">                                   
                                <div class="product_action_link">
                                    <ul>
                                        <li class="product_cart"><a href="contact.php" title="For Enquiry">Get Enquiry</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
    </div>
    
    <div class="col-md-3">
        <?php include('include/sidebar.php');?>
    </div>
    
</div>
    </div>
</div>  

<?php 
}
// }
 ?>
<?php include('include/footer.php');
