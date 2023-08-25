<?php include('include/header.php');
?>
<style>
.product_description ul, .product_description ul li {
    list-style: circle;
}
</style>

<?php

// $get_id = $_GET['product_id'];  

// $select = "SELECT products.*,

// category.id,category.title as cat_name,

// sub_category.sub_category_name

// FROM products
// LEFT JOIN category ON products.cat_id = category.id
// LEFT JOIN sub_category ON products.sub_cat_id = sub_category.id

//  WHERE products.id='$get_id'
// ";

// $query = mysqli_query($conn,$select);
// $row = mysqli_fetch_array($query);

//     $c_id = $row['id']; 
//     $title = $row['title'];

//     $cat_name = $row['cat_name'];   

//     $sub_cat_name = $row['sub_category_name'];   
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
                        <li><a href="sub_category.php?id=<?php echo $row['cat_id']; ?>"><?php echo $cat_name; ?></a></li>

                        <li><i class="fa fa-angle-right"></i></li>
                        
                        <li><a href="burner.php?product_id=<?php echo $row['sub_cat_id']; ?>"><?php echo $sub_cat_name; ?></a></li>

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
                <?php 
            // include "config.php";
            $id = $_GET['id'];

            $sql = "SELECT `id`, `title`, `img1`, `des`, `cat_id`,`sub_cat_id` FROM `products` WHERE `id` = {$id}";

             $result = mysqli_query($conn, $sql) or die("query failed");

             if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
                    <div class="col-lg-5 col-md-6">
                        <div class="exzoom hidden" id="exzoom">
                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    <li><img src="assets/img/<?php echo $row['img1']; ?>"/></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product_details">
                            <h3><?php echo $row['title']; ?></h3>
                            <span class="old_price" style="color:#0aa4e3;"><?php echo $row['title']; ?></span>
                           <div class="product_description">
                               <p><?php echo $row['des'];?></p>
                           </div>
                            <div class="product_details_action">                                   
                                <div class="product_action_link">
                                    <ul>
                                        <li class="product_cart"><a href="contact.php" title="For Enquiry">Get Enquiry</a></li>
                                        
                                         <li class="product_cart"><a href="burner.php?id=<?php echo $row['sub_cat_id']; ?>">Back</a></li>
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                    }
                    }
                    ?>
                </div>
            
    </div>
    
    <div class="col-md-3">
        <?php include('include/sidebar.php');?>
    </div>
    
</div>
    </div>
</div>  

<?php 
// }
// }
 ?>
<?php include('include/footer.php');
