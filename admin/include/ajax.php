<?php 
include('../core/core.php');

$options = '';	
$select = $_POST['category'];
$query = "SELECT * FROM `products_name` WHERE cat_id = '$select' ";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
	$options .= "<option value='$row[id]'>$row[product_name]</option>";
	}
echo $options;

?>