<?php 
include('../core/core.php');

$options = '';	
$select = $_POST['category'];
$query = "SELECT * FROM `sub_category` ";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
	$options .= "<option value='$row[id]'>$row[sub_name]</option>";
	}
echo $options;

?>