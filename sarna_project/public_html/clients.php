<?php include('include/header.php'); ?>

<style>
body {
    background: rgb(235, 239, 245);
}
</style>

<div class="breadcrumbs_area commun_bread commun_bread_client">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Our Clients</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Clients</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<section class="clients-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="color:#333; margin-bottom: 15px;">Our Clients</h3>
            </div>
        </div>
        <div class="row">
            <?php 
                $q="SELECT * FROM `clients`";
                $r=mysqli_query($conn,$q);
                while($col=mysqli_fetch_assoc($r))
                  {
                     $fetch_img = $col['image'];  
                ?>
            <div class="col-md-3">
                <div class="clients-logo">
                    <img src="assets/img/clients/<?php echo $fetch_img; ?>" class="img-fluid">                    
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>