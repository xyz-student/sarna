<?php
include"include/config.php";
$get_id = $_GET['cat_id'];
//exit;
$q="SELECT *FROM `top_category` WHERE `id`='$get_id'";
$r=mysqli_query($conn,$q);
while($col=mysqli_fetch_assoc($r))
  {
     $fetch_img = $col['image'];    

$query = "DELETE FROM `top_category` WHERE `id`= '$get_id'";
$delte_query = mysqli_query($conn, $query);
if ($delte_query) {
	unlink("../assets/img/".$fetch_img);
	header('location:top_category.php');
}

}

?>