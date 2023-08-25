<?php
include"include/config.php";
$get_id = $_GET['id'];
//exit;
$q="SELECT *FROM `banner` WHERE `id`='$get_id'";
$r=mysqli_query($conn,$q);
while($col=mysqli_fetch_assoc($r))
  {
     $fetch_img = $col['image'];    

$query = "DELETE FROM `banner` WHERE `id`= '$get_id'";
$delte_query = mysqli_query($conn, $query);
if ($delte_query) {
	unlink("../assets/img/".$fetch_img);
	echo "<script>window.location='slider_display.php'</script>";
}

}

?>