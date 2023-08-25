<?php include('include/header.php');

// $get_id = $_GET['id'];  
// $select = "SELECT * FROM category WHERE id='$get_id'";
// $query = mysqli_query($conn,$select);
// while($row = mysqli_fetch_array($query)) {
//     $c_id = $row['id']; 
//     $title = $row['title'];   
?>

<div class="breadcrumbs_area commun_bread commun_bread_category">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>All Categories</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>All Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //} 
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
                    <div class="col-md-12">
                        <div class="category-name">
                            <h4 style="color:#333;">All Categories</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ?php 
                        $select1 = "SELECT * FROM category";
                        $query1 = mysqli_query($conn,$select1);
                        while($row1 = mysqli_fetch_array($query1)) {
                            $pro_id = $row1['id']; 
                            $pro_title = $row1['title']; 
                    ?>
                    <div class="col-md-4">
                        <div class="single_product pb-2"> 
                            <div class="product_thumb">
                                 <a href="category-products.php?id=?=$pro_id;?>"><img src="assets/img/?=$row1['image'];?>" alt=""></a>                  
                            </div> 
                            <div class="product_content">
                                <h3><a href="category-products.php?id=?=$pro_id;?>">?=$row1['title'];?></a></h3> 
                            </div>    
                        </div>
                    </div>
                    ?php } ?> -->
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="1.php"><img src="assets/img/1590468909rubber.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="category-products.php">PNG & LPG Burners and their spare parts</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="2.php"><img src="assets/img/1590469041transfer-table.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="category-products.php">Hotel & Restaurant Kitchen Equipment</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="3.php"><img src="assets/img/1590470280side-wall.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="category-products.php">Kitchen Appliances</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_product pb-2">
                            <div class="product_thumb">
                                <a href="4.php"><img src="assets/img/1590473144multi-purp.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <h3><a href="category-products.php">Tent House products</a></h3>
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
</section>


<?php include('include/footer.php'); ?>