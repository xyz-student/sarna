

<?php
include"connect.php";

//include'function.php';

// slder delete function

	$blg_id = $_GET['About_id'];
	$query = "DELETE FROM `about` WHERE `id`= '$blg_id'";
	$delte_query = mysqli_query($conn, $query);
	if ($delte_query) {
		header('location:about_table.php');
	}
?>
