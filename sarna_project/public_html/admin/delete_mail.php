

<?php
include"include/config.php";

	$blg_id = $_GET['id'];
	$query = "DELETE FROM `enquires` WHERE `id`= '$blg_id'";
	$delte_query = mysqli_query($conn, $query);
	if ($delte_query) {
	    echo "<script>window.location='mail.php';</script>";
		//header('location:mail.php');
	}
?>
