<?php include('include/header.php');
$get_id = $_GET['id'];

    $select1 = "SELECT * FROM blogs WHERE id = '$get_id'";
    $query1 = mysqli_query($conn,$select1);
    while($row1 = mysqli_fetch_array($query1)) {
        $title = $row1['title'];
        $image = $row1['image'];
        $desc = $row1['des'];
?>
<style>
.product_description p {
    line-height: 26px;
}
</style>

<div class="breadcrumbs_area commun_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Blogs</h3>
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

<div class="single_product_wrapper">
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_gallery">
                            <div class="tab-content produc_thumb_conatainer">
                                <div class="tab-pane fade show active" id="p_tab1" role="tabpanel" >
                                    <div class="modal_img blog-detail-img">
                                        <a href="#"><img src="assets/img/<?=$image?>" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product_details">
                            <h3><?php echo $title ?></h3>
                           <div class="product_description">
                               <p><?php echo $desc ?>
                           </p>
                           </div>
                            <!-- <div class="product_details_action">                                   
                                <div class="product_action_link">
                                    <ul>
                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Get Enquiry</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="sidebar_widget">
                <!--widget color start-->
                <div class="widget_list widget_color">
                    <h3>Latest Blogs</h3>
                    <ul>
                        <li><a href="#">Why Use GPS Tracker </a></li>
                        <li><a href="#">How does Work GPS Tracker</a></li>
                        <li><a href="#">Why Use GPS Tracker </a></li>
                        <li><a href="#">How does Work GPS Tracker</a></li>
                        <li><a href="#">Why Use GPS Tracker </a></li>
                        <li><a href="#">How does Work GPS Tracker</a></li>
                        <li><a href="#">Why Use GPS Tracker </a></li>
                        <li><a href="#">How does Work GPS Tracker</a></li>
                    </ul>
                </div>
                <!--widget color start-->
                <!--widget color start-->
                <div class="widget_list widget_color">
                    <h3>All Solution</h3>
                    <ul>
                        <li><a href="#">GPS Solution </a></li>
                        <li><a href="#">GIS Map Solution</a></li>
                        <li> <a href="#">IOT Solution</a></li>
                        <li><a href="#">Surveillance</a></li>
                    </ul>
                </div>
                <!--widget color start-->
            </div>
            </div>

        </div>
    </div>
</div>

<?php } ?>

<?php include('include/footer.php'); ?>