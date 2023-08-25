<?php include('include/header.php');
$get_id = $_GET['acc_id'];
$select = "SELECT * FROM accessories WHERE id = '$get_id'";
$query = mysqli_query($conn,$select);
while($row = mysqli_fetch_array($query)) {
    $id = $row['id']; 
    $pro_title = $row['title']; 
    // $c_id = $row['cat_id']; 

    $select1 = "SELECT * FROM products WHERE access = '$get_id'";
    $query1 = mysqli_query($conn,$select1);
    while($row1 = mysqli_fetch_array($query1)) {
        
?>

<div class="breadcrumbs_area commun_bread">
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
                                    <li><img src="assets/img/<?=$row['img1'];?>"/></li>
                                    <li><img src="assets/img/<?=$row['img2'];?>"/></li>
                                    <li><img src="assets/img/<?=$row['img3'];?>"/></li>
                                    <li><img src="assets/img/<?=$row['img4'];?>"/></li>
                                    <li><img src="assets/img/<?=$row['img5'];?>"/></li>
                                    <!-- 
                                    <li><img src="assets/img/product/p2.jpg"/></li>
                                    <li><img src="assets/img/product/p3.jpg"/></li>
                                    <li><img src="assets/img/product/p4.jpg"/></li>
                                    <li><img src="assets/img/product/p5.jpg"/></li> -->
                                </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                            <p class="exzoom_btn">
                                <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product_details">
                            <h3><?php echo $pro_title; ?></h3>
                            <!-- <span class="old_price" style="color:#0aa4e3;"><?php echo $row1['title']; ?></span> -->
                           <div class="product_description">
                               <p><?php echo strip_tags(substr($row['des'],0,500)); ?></p>
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
                
                <div class="product_d_info mt-4">
    
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">   
                    <div class="product_info_button">    
                        <ul class="nav" role="tablist">
                            <li >
                                <a class="active" data-toggle="tab" href="#details">Details</a>
                            </li>
                            <li>
                                 <a data-toggle="tab" href="#features">Features</a>
                            </li>
                            <li>
                               <a data-toggle="tab" href="#specific">Specification</a>
                               <!-- <a data-toggle="tab" href="#access">Optional Accessories</a> -->
                               <a data-toggle="tab" href="#downloads">Downloads</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="details" role="tabpanel" >
                            <div class="product_info_content">
                                <p><?php echo $row['des']; ?></p>
                            </div>    
                        </div>

                        <div class="tab-pane fade" id="features" role="tabpanel" >
                            <div class="product_info_content">
                               <p><?php echo $row['feature']; ?></p>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="specific" role="tabpanel" >
                            <div class="product_info_content">
                                <p><?php echo $row['spec']; ?></p>
                            </div>  
                        </div>
                        
                         <div class="tab-pane fade" id="downloads" role="tabpanel" >
                            <div class="product_info_content">
                                <?php echo $row['downloads']; ?>
                                <!-- <p><a href="#">User Mannual</a> 
                                <span class="badge badge-primary">Download</span></p>
                                <p></p>
                                <p><a href="#">Specification</a>
                                <span class="badge badge-primary">Download</span>
                                </p> -->
                            </div>  
                        </div>

                    </div>
                </div>     
            </div>
        </div>
    
</div>
                
            </div>
            
            <div class="col-md-3">
                <?php include('include/sidebar.php') ?>               
            </div>

        </div>
    </div>
</div>


<?php }} ?>
<?php include('include/footer.php'); ?>