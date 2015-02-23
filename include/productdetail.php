<div class="full_page_photo no_photo">
     <div class="hgroup">
      <div class="hgroup_title animated bounceInUp">
   <div class="container">
     <h1>This is the default portfolio custom title</h1>
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
<?php
	$detail_query = "SELECT products.id AS product_id , products.product_name_id , products.product_image , products.product_code, products.product_size , products.product_description , products.product_count , products.product_handle , products.product_colors ,
						products_name.id , products_name.product_name , products_name.cat_id 
						FROM `products` INNER JOIN  `products_name` ON products.product_name_id = products_name.id
						WHERE products.id = $_GET[id] ";
	$detail_result = mysqli_query($connection , $detail_query);
	$detail_row = mysqli_fetch_assoc($detail_result);
?>
<section class="portfolio_slider_wrapper">
	<div class="container">
        <div class="col-md-5">
            <img src="images/products/<?php echo $detail_row['product_image']; ?>">
        </div>
        <div class="col-md-7 text-justify" dir="rtl">
            <h2><?php echo $detail_row['product_name']; ?></h2>
            <p><?php echo $detail_row['product_description']; ?></p>
            <p>نوع دسته : <?php echo $detail_row['product_handle']; ?></p>
            <p>سایز ها : <?php echo $detail_row['product_size']; ?></p>
            <p>رنگ ها : <?php echo $detail_row['product_colors']; ?></p>
        </div>
    </div>
</section>







<section class="portfolio_teasers_wrapper">
     <div class="container">
          <h2 class="elegant centered section_header">Related Projects<small></small></h2>
          <div class="portfolio_strict row">
               <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item">
                      <a href="http://plethorathemes.com/wordpress/cleanstart/portfolio/poetic_ii/">
                         <figure style="background-image:url(http://plethorathemes.com/wordpress/cleanstart/wp-content/uploads/sites/2/2014/08/111.jpg)">
                              <figcaption>
                                   <div class="portfolio_description">
                                        <h3>Poetic II</h3>
                                        <span class="cross"></span>
                                        <p>Poetic</p>
                                   </div>
                              </figcaption>
                         </figure>
                      </a>
                    </div>
               </div>
               <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item">
                      <a href="http://plethorathemes.com/wordpress/cleanstart/portfolio/poetic_iii/">
                         <figure style="background-image:url(http://plethorathemes.com/wordpress/cleanstart/wp-content/uploads/sites/2/2014/08/serv_11.jpg)">
                              <figcaption>
                                   <div class="portfolio_description">
                                        <h3>Poetic III</h3>
                                        <span class="cross"></span>
                                        <p>Poetic</p>
                                   </div>
                              </figcaption>
                         </figure>
                      </a>
                    </div>
               </div>
               <div class="col-sm-4 col-md-4">
                    <div class="portfolio_item">
                      <a href="http://plethorathemes.com/wordpress/cleanstart/portfolio/poetic_iv/">
                         <figure style="background-image:url(http://plethorathemes.com/wordpress/cleanstart/wp-content/uploads/sites/2/2014/08/a6-1024x682.jpg)">
                              <figcaption>
                                   <div class="portfolio_description">
                                        <h3>Poetic IV</h3>
                                        <span class="cross"></span>
                                        <p>Poetic</p>
                                   </div>
                              </figcaption>
                         </figure>
                      </a>
                    </div>
               </div>
          </div>
     </div>
</section>