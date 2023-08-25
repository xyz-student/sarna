<?php include('include/header.php');
$get_id = $_GET['id'];
    $select1 = "SELECT * FROM solution_detail WHERE id='$get_id'";
    $query1 = mysqli_query($conn,$select1);
    while($row1 = mysqli_fetch_array($query1)) {
        $title = $row1['title'];
        $image = $row1['image'];
        $desc = $row1['des'];
 ?>

<div class="breadcrumbs_area commun_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3><?php echo $title ?></h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><?php echo $title ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<section class="solution-details">
    <div class="container">
        <div class="row">
            <div class="col-md-6">                
                <img src="assets/img/<?php echo $image ?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h4>About <?php echo $title ?></h4>
                <p><?php echo $desc; ?></p>
                <a href="solution-category.php?id=<?=$row['id'];?>" class="btn btn-dark mt-3">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php } ?>

<?php include('include/footer.php'); ?>