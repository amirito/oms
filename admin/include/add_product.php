

<?php
$error='';
if(isset($_POST['submit'])){
	### Assigning ####
	
	$category = $_POST['category'];
	$product_name = $_POST['product_name'];
	$product_code = $_POST['product_code'];
	$product_description = $_POST['product_description'];
	$product_count = $_POST['product_count'];
	$product_handle = $_POST['product_handle'];
	$product_size = $_POST['product_size'];
	$picture = $_FILES['product_image'];
	$cat_id = $_POST['category'];
	$sub_cat_id = $_POST['product_sub_cat'];
	$product_colors = '';
	
	for($i = 1 ; $i < 11 ; $i++){
		if(isset($_POST[$i])){
			$product_colors .= $_POST[$i].'-';
			}
	}
	
	if($picture['error'] == "0"){
		$picture['name'] = time().'.jpg';
		$address = "../images/products/$picture[name]";
		move_uploaded_file($picture['tmp_name'],$address);
	
		//$fetch_query = "SELECT * FROM products_name WHERE product_name= '' ";		
		

	

	
	#######  INSERT INTO DB ########
	$query = "INSERT INTO `products`(`id`, `product_name`, `product_code`, `product_size`, `product_count` , `product_description`, `product_handle`, `product_colors`, `product_image` , `cat_id` , `sub_cat_id` ) VALUES ('','$product_name','$product_code','$product_size','$product_count','$product_description','$product_handle','$product_colors','$picture[name]','$cat_id',$sub_cat_id)";
					
	$result = mysqli_query($connection,$query);
	
	if($result){
		$error = '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  اطلاعات با موفقیت ثبت شد
</div>';
		}else{
			$error = '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>اخطار!</strong> خطایی در ثبت اطلاعات رخ داده است
</div>';
			}
	}else {
	$error = '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>اخطار!</strong> خطایی در ثبت اطلاعات رخ داده است
</div>'; }
}
?>


<div style="padding-top:50px">
    	<form dir="rtl" method="post" role="form" class="form-horizontal " enctype="multipart/form-data">
        	<div class="form-group">
            	<label class="control-label pull-right col-xs-2">انتخاب جنس محصول :</label>
            	 <div class="col-xs-4 pull-right">   
             	   <select id="category" name="category" class="form-control">
              	    <option value="n">جنس محصول را انتخاب کنید</option>
              	    <option value="1">استیل</option>
              	    <option value="2">سرامیک</option>
                    <option value="3">کتری قوری</option>
                    <option value="4">گرانیت</option>
             	   </select>
          		  </div>
            </div>
            <div class="form-group">
                <label class="control-label pull-right col-xs-2">انتخاب نوع محصول:</label>
                 <div class="col-xs-4 pull-right"> 
                <select id="product_sub_cat" name="product_sub_cat" class="form-control" disabled>
                </select>
                 </div>
            </div>
            <div class="form-group">
                <label class="control-label pull-right col-xs-2">نام محصول :</label>
                 <div class="col-xs-4 pull-right"> 
                <input type="text" id="product_name" name="product_name" class="form-control">
                </select>
                 </div>
            </div>
          	 <div class="form-group">
                <label class="control-label pull-right col-xs-2">انتخاب کد محصول:</label>
                 <div class="col-xs-4 pull-right">
                <input type="text" id="product_code" name="product_code" class="form-control">
                </div>   
            </div>
            <div class="form-group">
                <label class="control-label pull-right col-xs-2">انتخاب شرح محصول:</label>
                <div class="col-xs-4 pull-right">
                <input type="text" id="product_description" name="product_description" class="form-control"> 
                </div>  
            </div>
            	
            <div class="form-group">
                <label class="control-label pull-right col-xs-2">تعداد در پالت :</label>
                <div class="col-xs-4 pull-right">
                <input type="text" id="product_count" name="product_count" class="form-control">
                </div>   
            </div>
            <div class="form-group">
                <label class="control-label pull-right col-xs-2">انتخاب طرح دسته:</label>
                <div class="col-xs-4 pull-right">
                <input type="text" id="product_handle" name="product_handle" class="form-control"> 
                </div>  
            </div>
            <div class="form-group">
                <label class="control-label pull-right col-xs-2">انتخاب سایز محصول:</label>
                <div class="col-xs-4 pull-right">
                <input type="text" id="product_size" name="product_size" class="form-control">   
                </div>
            </div>
            <div class="form-group">
                <label class="control-label pull-right col-xs-2">انتخاب عکس محصول:</label>
                <div class="col-xs-4 pull-right">
                <input type="file" id="product_image" name="product_image">  
                </div> 
            </div>
            <div class="form-group" id="color">
                <label class="control-label pull-right col-xs-2">انتخاب رنگ محصول:</label>
                <div class="col-xs-10 pull-right">
               قرمز <input type="checkbox" name="1" value="#dc0b0b"><div class="div-colors" style="background-color:#dc0b0b;"></div> 
               مغز پسته ای <input type="checkbox" name="2" value="#7d9b06"><div class="div-colors" style="background-color:#7d9b06;"></div> 
               آبی فیروزه ای <input type="checkbox" name="3" value="#3abde3"><div class="div-colors" style="background-color:#3abde3;"></div> 
               قهوه ای <input type="checkbox" name="4" value="#9d7f44"><div class="div-colors" style="background-color:#9d7f44;"></div> 
               مشکی <input type="checkbox" name="5" value="#000000"><div class="div-colors" style="background-color:#000000;"></div> 
               بنفش <input type="checkbox" name="6" value="#8b008b"><div class="div-colors" style="background-color:#8b008b;"></div> 
               کرم <input type="checkbox" name="7" value="#fcfcc5"><div class="div-colors" style="background-color:#fcfcc5;"></div> 
               صورتی <input type="checkbox" name="8" value="#ff69bf"><div class="div-colors" style="background-color:#ff69bf;"></div>
               گلبهی <input type="checkbox" name="10" value="#ffb6c1"><div class="div-colors" style="background-color:#ffb6c1;"></div>  
            </div>
            </div>
            
            	<div class="col-sm-2 pull-right">
            	<input type="submit" value="ثبت محصول" name="submit" class="btn btn-danger">
                </div>
        </form>
</div>
        <?php echo $error; ?>
        
 