<?php
include"include/config.php";

$get_id = $_GET['id'];
//exit;
$q="SELECT *FROM `sub_category` WHERE `id`='$get_id'";
$r=mysqli_query($conn,$q);
while($col=mysqli_fetch_assoc($r))
  {
     $fetch_img1 = $col['image'];    

$query = "DELETE FROM `sub_category` WHERE `id`= '$get_id'";
$delte_query = mysqli_query($conn, $query);
if ($delte_query) {
	unlink("../assets/img/".$fetch_img1);
	header('location:sub_category.php');
}

}

?>