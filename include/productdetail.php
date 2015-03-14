<?php
	$detail_query = "SELECT * FROM `products` WHERE products.id = '$_GET[id]' ";
	$detail_result = mysqli_query($connection , $detail_query);
	$detail_row = mysqli_fetch_assoc($detail_result);
	
	function colors($color,$searchColor){
		if(strpos($color,$searchColor)){echo '<div class="div-colors" style="background-color:#'.$searchColor.'"></div>';}
	}
	
	
	function catToName($id,$tableName,$connection){
		$query = "SELECT * FROM $tableName WHERE id = '$id' ";
		$result = mysqli_query($connection , $query);
		$row = mysqli_fetch_assoc($result);
		return $row;
		}
?>

<div class="full_page_photo no_photo">
     <div class="hgroup">
      <div class="hgroup_title animated bounceInUp">
   <div class="container">
     <h1>
	 <?php
		 $cat_id1 = catToName($detail_row['cat_id'],'category',$connection);
		 echo $cat_id1['category'];
	  ?>
     </h1>
   </div>
</div>
<div class="hgroup_subtitle animated bounceInUp skincolored">
   <div class="container">
     <p>
	 <?php
		 $cat_id2 = catToName($detail_row['sub_cat_id'],'sub_category',$connection);
		 echo $cat_id2['sub_name'];
	  ?>
     </p>
   </div>
</div>
     </div>
</div>

<div class="main">
<div class="container triangles-of-section">
  <div class="triangle-up-left"></div>
  <div class="square-left"></div>
  <div class="triangle-up-right"></div>
  <div class="square-right"></div>
</div>

<section class="portfolio_slider_wrapper">
	<div class="container">
        <div class="col-md-5">
            <img src="images/products/<?php echo $detail_row['product_image']; ?>">
        </div>
        <div class="col-md-7 text-justify" dir="rtl">
           <?php 
		   		 if($detail_row['product_name']){echo "<h2>$detail_row[product_name]</h2>";} 
            	 if($detail_row['product_description']){echo "$detail_row[product_description]";} 
            	 if($detail_row['product_handle']){echo "<p>نوع دسته : $detail_row[product_handle] </p>";} 
            	 if($detail_row['product_size']){echo "<p>سایز ها : $detail_row[product_size] </p>";} 
            	 if($detail_row['product_count']){echo "<p>تعداد در پالت : $detail_row[product_count] </p>";} 
            	 if($detail_row['product_code']){echo "<p>کد محصول : $detail_row[product_code] </p>";} 
            	 if($detail_row['product_colors']){
					echo '<p style="display:inline-block">رنگ ها : ';
						colors($detail_row['product_colors'],"dc0b0b");
						colors($detail_row['product_colors'],"7d9b06");
						colors($detail_row['product_colors'],"3abde3");
						colors($detail_row['product_colors'],"9d7f44");
						colors($detail_row['product_colors'],"000000");
						colors($detail_row['product_colors'],"8b008b");
						colors($detail_row['product_colors'],"fcfcc5");
						colors($detail_row['product_colors'],"ff69bf");
						colors($detail_row['product_colors'],"ffb6c1");
					echo '</p>';
			}?>
        </div>
    </div>
</section>







<section class="portfolio_teasers_wrapper">
     <div class="container">
          <h2 class="elegant centered section_header">محصولات مشابه<small></small></h2>
          <div class="portfolio_strict row">
          
          <?php
		  
		    $related_query = "SELECT * FROM `products` WHERE (cat_id = '$detail_row[cat_id]' AND sub_cat_id = '$detail_row[sub_cat_id]' AND id <> '$detail_row[id]') ORDER BY RAND() LIMIT 3 ; ";
			$related_result = mysqli_query($connection , $related_query);
		  	while($related_row = mysqli_fetch_assoc($related_result)){
               echo "<div class='sub_cat$related_row[sub_cat_id] col-sm-4 col-md-4'>
                    <div class='portfolio_item'>
                      <a href='?page=productdetail&id=$related_row[id]'>
                         <figure style='background-image:url(images/products/$related_row[product_image])'>
                              <figcaption>
                                   <div class='portfolio_description'>
                                        <h3 dir='rtl'>$related_row[product_name]</h3>
                                        <span class='cross'></span>
                                        <p>Poetic</p>
                                   </div>
                              </figcaption>
                         </figure>
                      </a>
                    </div>
               </div>";
			}
          ?> 
              
          </div>
     </div>
</section>