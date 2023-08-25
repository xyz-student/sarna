<?php include('include/header.php');

// $get_id = $_GET['id'];  
// $select = "SELECT * FROM category WHERE id='$get_id'";
// $query = mysqli_query($conn,$select);
// while($row = mysqli_fetch_array($query)) {
//     $c_id = $row['id']; 
//     $title = $row['title'];   
?>
<div class="breadcrumbs_area commun_bread commun_bread_about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Product Details </h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//  } 
?>

<div class="container">
    <div class="row">

    </div>
</div>


<section class="all-products">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <?php
                    // $select2 = "SELECT * FROM `products`";
                    // $query2 = mysqli_query($conn, $select2);
                    // while ($row2 = mysqli_fetch_array($query2)) {
                    // $product_id = $_GET['id'];
                    // $sql = "SELECT * FROM `products` WHERE id = {$product_id}";

                    // $result = mysqli_query($conn, $sql) or die("query failed");

                    // if (mysqli_num_rows($result) > 0) {
                    //     while ($row = mysqli_fetch_assoc($result)) {
                    // 
                    ?>

                    <!-- <div class="col-lg-4 col-md-6">
                    
                    <img src="assets/img/php echo $row['img1']; ?>" alt="">
                </div>
                <div class="col-lg-8 col-md-6">
                    <p>php echo $row['des']; ?></p>
                </div> -->
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="product.php"><img src="assets/img/1590468909rubber.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php">Burners – T Series Burners</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="product.php"><img src="assets/img/1590469018conveyor.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php">Burners – M Series Burners</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="product.php"><img src="assets/img/1590469041transfer-table.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php">Burners – Canteen Burners </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="product.php"><img src="assets/img/1590469067storage.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php">Pigtails- Flexible pigtails</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="product.php"><img src="assets/img/1590470280side-wall.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php">Pigtails- Copper pigtails</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="product.php"><img src="assets/img/1590474198tyre-spot.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php">Pan supports- Names & Sizes </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="product.php"><img src="assets/img/1590468909rubber.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php">Spare parts- Names and sizes </a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- ?php }
                    } ?> -->
                </div>
            </div>

            <div class="col-md-3">
                <?php include('include/sidebar.php') ?>
            </div>


        </div>
    </div>
</section>


<?php include('include/footer.php'); ?>