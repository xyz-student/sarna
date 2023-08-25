<?php
// Login Function

if(isset($_POST['login_submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];

if ($email!="" && $password!="") {

		$query="SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'";
		$login_match = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if ( mysqli_num_rows($login_match) > 0 ) {
			//echo "<script>alert('Login successfully');window.location='insert_Product.php';</script>";
			$login_row = mysqli_fetch_assoc($login_match);

			$_SESSION['name'] = $login_row['email'];
			//echo $_SESSION['name'];

			echo"<script>window.location.href='category_products.php';</script>";
		}else{
			echo "<script>alert('Invalid email or password')</script>";
		}
	}

}


?>	