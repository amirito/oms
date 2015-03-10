<?php 

	
	$sub_query = "SELECT * FROM `sub_category` WHERE id = $_GET[id]";
	$sub_result = mysqli_query($connection , $sub_query) ;
	$sub_row = mysqli_fetch_assoc($sub_result);
	
	$product_query = "SELECT * FROM products WHERE sub_cat_id = $_GET[id] ";
	$product_result = mysqli_query($connection,$product_query);	
	
	
?>

<div class="full_page_photo no_photo">
     <div class="hgroup">
      <div class="hgroup_title animated bounceInUp">
   <div class="container">
     <h1>
	 	محصولات
     </h1>
   </div>
</div>
<div class="hgroup_subtitle animated bounceInUp skincolored">
   <div class="container">
     <p>
	 <?php
	 	echo $sub_row['sub_name'];
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


<section id=""  class="light"> <div class="container">  <div class="row"><div class="col-md-12  text-default" >
<div class="portfolio_strict">
     
<div class="row isotope_portfolio_container" id="cont_3021">
<?php

	while($product_row = mysqli_fetch_assoc($product_result)){
		echo '
		<div class="sub_cat'.$product_row['sub_cat_id'].' col-xs-12 col-sm-6 col-md-3">
			 <div class="portfolio_item">
			   <a href="?page=productdetail&id='.$product_row['id'].'">
				  <figure style="background-image:url(images/products/'.$product_row['product_image'].')">
					   <figcaption>
						 <div class="portfolio_description">
							<h3 dir="rtl">'.$product_row['product_name'].'</h3>
							<span class="cross"></span>
							<p class="broadway">O.M.S </p>
						 </div>
					   </figcaption>
				  </figure>
			   </a>
			  </div>
		</div>';
		}
?>

                    </div>
</div>
<script>

jQuery(function() {

  'use strict'; 
  
  var container = jQuery('#cont_3021'); 
  var filt  = jQuery('#filt_3021');
  var filtA = filt.find('a');
      filtA.eq(0).addClass('active'); 
  
  var selector = filtA.eq(0).attr('data-filter');
  container.isotope({ filter: selector });   

  // filt.find("a[data-filter="*"]").addClass('active'); 

  filtA.click(function(){ 
  
    filtA.removeClass('active'); 
    jQuery(this).addClass('active'); 
    selector = jQuery(this).attr('data-filter'); 
    container.isotope({ filter: selector }); 
    return false; 

  }); 

  /*** USED FOR WINDOW RESIZE ***/
  jQuery(window).resize(function() {

    container.isotope({});

  });

}); 
</script>
</div>  </div>  </div></section>