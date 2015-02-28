<head>
<meta charset="utf-8">
</head>
<?php 
include('../core/core.php');

$options = '';	
$select = $_POST['product_sub_cat'];
$query = "SELECT products.id AS products_id , products.product_name_id , products.sub_cat_id , products_name.id , products_name.product_name FROM `products`
		INNER JOIN `products_name` ON products.product_name_id = products_name.id 
 		WHERE products.sub_cat_id = '4' ";
var_dump($query);
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
	$options .= "<option value='$row[id]'>$row[product_name]</option>";
	}
echo $options;

?>