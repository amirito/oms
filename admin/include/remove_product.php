<?php 

	if(isset($_POST['submit'])){
		$remove_query = "DELETE FROM `products` WHERE `id` = '$_POST[id]' " ;
		$remove_result = mysqli_query($connection,$remove_query);
		
		
		}




	$query = "SELECT * FROM `products` ";
	$result = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($result)){
		echo "
			<div class='col-sm-3 thumbnail' style='margin-bottom:30px;margin-top:50px;'>
				<img src='../images/products/$row[product_image]' class='img-responsive' style='height: 200px !important ; width: 100%'>
				<p class='text-center'>$row[product_name]</p>
				<form method='post' role='form'>
				<input type='hidden' value='$row[id]' name='id'>
				<input type='submit' value='حذف محصول' name='submit' class='form-control btn btn-danger'>
				<a href='?page=edit&id=$row[id]' class='form-control btn btn-warning'>ویرایش محصول</a>
			
			</div>
		
		
		"
		
		;}
	
?>