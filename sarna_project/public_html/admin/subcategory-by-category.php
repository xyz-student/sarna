<?php 

// print_r($_POST);
// echo $category_id;
include"include/config.php";


$sql = "SELECT * FROM `sub_category` WHERE category_id = {$_POST['category_id']}";

$result = mysqli_query($conn, $sql) or die("query failed");

$data = "";

// $row[] = mysqli_fetch_assoc($result);


// echo "<pre>";
// print_r($row);
// echo "</pre>";



// die();

if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){
        $data.="<option value='{$row['id']}'>{$row['sub_category_name']}</option>";
    }
    }
    else{
        $data.="<option readonly selected>No record found</option>";
    }
    echo $data;
    
    // die();

// die();

?>