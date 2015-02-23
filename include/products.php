<div class="full_page_photo" style="background-image: url(images/banner1.jpg)">
     <div class="hgroup">
      <div class="hgroup_title animated bounceInUp">
   <div class="container">
     <h1 dir="rtl" style="font-family:koodak,broadway">محصولات <strong><span class="rotate">ما, O.M.S</span></strong></h1>
   </div>
</div>
<div class="hgroup_subtitle animated bounceInUp skincolored">
   <div class="container">
     <p>Small business with a <strong>character</strong> and a style unique enough to impress!</p>
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
     <ul class="portfolio_filters" id="filt_3021">
          <li><a href="#" data-filter="*">Show All</a></li>
          <li><a href="#" data-filter=".poetic">Poetic</a></li>
          <li><a href="#" data-filter=".people">People</a></li>
          <li><a href="#" data-filter=".artists">Artists</a></li>
          <li><a href="#" data-filter=".travel">Travel</a></li>
     </ul>
<div class="row isotope_portfolio_container" id="cont_3021">
<?php

	$product_query = "SELECT products.id AS product_id , products.product_name_id , products.product_image , 
						products_name.id , products_name.product_name , products_name.cat_id 
						FROM `products` INNER JOIN  `products_name` ON products.product_name_id = products_name.id
						WHERE products_name.cat_id = $_GET[catid] ";
	$product_result = mysqli_query($connection,$product_query);
	while($product_row = mysqli_fetch_assoc($product_result)){
		echo'
		
		<div class="poetic col-xs-12 col-sm-6 col-md-3">
			 <div class="portfolio_item">
			   <a href="?page=productdetail&id='.$product_row['product_id'].'">
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
		</div>
		
		';
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