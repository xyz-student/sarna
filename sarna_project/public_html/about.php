<?php include('include/header.php'); ?>

<div class="breadcrumbs_area commun_bread commun_bread_about">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>About us</h3>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<?php 
    $select = "SELECT * FROM about";
    $query = mysqli_query($conn,$select);
    while($row = mysqli_fetch_array($query)) {
?>
<div class="about_section">
    <div class="container">  
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="about_content">
                    <h1 class="text-center"><?php echo $row['title']; ?></h1>
                    <p>
                       
                        <?php echo $row['des']; ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="about_content">
                  
                    <p>
                        <img src="assets/img/<?php echo $row['image']; ?>" alt="about JusTrack" class="img-resposnive d-block m-2 about-img" style="float: right; width:450px; border-radius:5px;">
                        
                    </p>
                </div>
            </div>
            <!-- <div class="col-md-5">
                <div class="about_thumb">
                </div>
            </div> -->
        </div>

    </div>     
</div>

<?php } ?>

<?php include('include/footer.php'); ?>