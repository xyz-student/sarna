<?php include('include/header.php'); ?>

<div class="breadcrumbs_area commun_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Blogs</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<section class="blogs-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="color:#333; margin-bottom: 15px;">Our Blogs</h3>
            </div>
        </div>
        <div class="row">
            <?php 
                $select1 = "SELECT * FROM blogs";
                $query1 = mysqli_query($conn,$select1);
                while($row1 = mysqli_fetch_array($query1)) {
            ?>
            <div class="col-md-6">
                <div class="single_product"> 
                    <div class="product_thumb">
                         <a href="blog-detail.php?id=<?=$row1['id'];?>"><img src="assets/img/<?=$row1['image'];?>" alt=""></a>                  
                    </div> 
                    <div class="product_content">
                        <h3><a href="blog-detail.php?id=<?=$row1['id'];?>"><?=$row1['title'];?></a></h3>  
                        <p><?=substr($row1['des'],0,300);?>...</p>
                        <a href="blog-detail.php?id=<?=$row1['id'];?>" class="btn btn-primary mt-3">Read More</a>
                    </div>    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>