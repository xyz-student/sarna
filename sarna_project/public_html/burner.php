<?php include('include/header.php');

// $get_id = $_GET['product_id'];  
 
// $select = "SELECT sub_category.id,sub_category.sub_category_name,sub_category.category_id,
// category.id,category.title
// FROM sub_category
// LEFT JOIN category ON sub_category.category_id = category.id WHERE sub_category.id='$get_id'";

// $query = mysqli_query($conn,$select);
// $row = mysqli_fetch_array($query);

//     $c_id = $row['id']; 
//     $cat_name = $row['title'];
//     $title = $row['sub_category_name'];   

?>
<!-- <div class="breadcrumbs_area commun_bread commun_bread_about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>?php echo $title; ?></h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><a href="sub_category.php?id=?php echo $row['category_id']; ?>"?php echo $cat_name; ?></a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php
 
?>

<div class="container">
    <div class="row">

    </div>
</div>

    <div class="product_details_action">                                   
                                <div class="product_action_link mx-5 w-75 d-flex justify-content-end">
                                    <ul>
                                         <li class="product_cart"><a href="sub_category.php?id=<?php echo $row['category_id']; ?>">Back</a></li>
                                         
                                    </ul>
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

                <?php
                        // include "config.php";

                        if(isset($_GET['id'])){
                            $id= $_GET['id'];
                        }     

                        $sql = "SELECT `id`, `title`, `img1`, `des`, `cat_id` FROM `products` WHERE `sub_cat_id` = {$id}";

                         $result = mysqli_query($conn, $sql) or die("query failed");

                         if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>

                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb" style="width:100%; height:auto; text-align: center;">
                                <a href="product.php?id=<?php echo $row['id']; ?>"><img src="assets/img/<?php echo $row['img1']; ?>" alt="" style="width:auto; height: 300px;object-fit: cover;"></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="product.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a></h3>
                            </div>
                        </div>
                    </div>

                    <?php 
                            }
                        }
                    ?>

                    <!-- <div class="col-md-4">
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
                    </div> -->

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