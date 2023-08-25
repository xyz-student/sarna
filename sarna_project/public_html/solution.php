<?php include('include/header.php'); ?>

<div class="breadcrumbs_area commun_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Solution</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Solution</li>
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
                <h3 style="color:#333; margin-bottom: 15px;">Our Solution</h3>
            </div>
        </div>
        <div class="row">
                <?php 
                    $select = "SELECT * FROM solution";
                    $query = mysqli_query($conn,$select);
                    while ($row = mysqli_fetch_array($query)) {
                ?>
            <div class="col-md-4">
                <div class="single_product" style="box-shadow:0px 0px 2px 1px #e2dddd"> 
                    <div class="product_thumb">
                         <a href="solution-category.php?id=<?=$row['id'];?>"><img src="assets/img/<?php echo $row['image']; ?>" alt="" style="height:250px;"></a>
                    </div> 
                    <div class="product_content">
                        <h3><a href="solution-category.php?id=<?=$row['id'];?>"><?php echo $row['title']; ?></a></h3>  
                        <p><?php echo substr($row['des'],0,250); ?>..</p>
                        <a href="solution-category.php?id=<?=$row['id'];?>" class="btn btn-primary mt-3">Read More</a>
                    </div>    
                </div>
            </div>
        <?php } ?>
            
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>