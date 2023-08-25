<?php include('include/header.php');
$get_id = $_GET['id'];
$select = "SELECT * FROM solution WHERE id='$get_id'";
$query = mysqli_query($conn,$select);
while ($row = mysqli_fetch_array($query)) {

?>

<div class="breadcrumbs_area commun_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3><?php echo $row['title']; ?></h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><?php echo $row['title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<section class="solution-details">
    <div class="container">
        <div class="row">
            <div class="col-md-4">                
                <img src="assets/img/<?php echo $row['image']; ?>" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h4>About <?php echo $row['title']; ?></h4>
                <p><?php echo $row['des']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="choose solution-feature hightlights-head">
            <div class="container text-center">
                <div class="section-heading align-center mb-40">
                    <h3 class="w text-uppercase">Highlights</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media text-left">
                            <div class="media-body">
                                <?php echo $row['high1']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media text-left">
                            <div class="media-body">
                                <?php echo $row['high2']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="choose solution-feature feature-heading" style="background: #fff;">
    <div class="container">
        <div class="section-heading align-center mb-40 text-center">
            <h3 class="w text-uppercase">Our Features</h3>
        </div>

        <div class="row mt-4">
            <div class="col-sm-12">
                <?php echo $row['feature1']; ?>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <?php echo $row['feature2']; ?>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <?php echo $row['feature3']; ?>
            </div>
        </div>

    <p class="mt-3 text-center"><a href="contact.php" class="btn btn-dark btn-lg">Contact Us</a></p>

    </div>
</section>
<?php } ?>

<?php include('include/footer.php'); ?>