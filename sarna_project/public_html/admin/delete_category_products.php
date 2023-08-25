<?php
include"include/config.php";
$get_id = $_GET['id'];
//exit;
$q="SELECT *FROM `products` WHERE `id`='$get_id'";
$r=mysqli_query($conn,$q);
while($col=mysqli_fetch_assoc($r))
  {
     $fetch_img1 = $col['img1'];    

$query = "DELETE FROM `products` WHERE `id`= '$get_id'";
$delte_query = mysqli_query($conn, $query);
if ($delte_query) {
	unlink("../assets/img/".$fetch_img1);
	header('location:category_products.php');
}

}

?>