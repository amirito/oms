<section id="slider_wrapper" class="slider_wrapper full_page_photo">
    <div id="main_flexslider" class="flexslider">
         <ul class="slides">
              <li class="item" style="background-image: url(images/banner1.jpg)">
                   <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                             <h1 class="broadway">O.M.S.</h1>
                             <p class="lead skincolored">پیشرو در تنوع و کیفیت</p>
                        </div>
                   </div>
              </li>
              <li class="item" style="background-image: url(images/banner2.jpg)">
                   <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                             <h1 class="broadway">O.M.S.</h1>
                             <p class="lead skincolored">پیشرو در تنوع و کیفیت</p>
                        </div>
                   </div>
              </li>
              <li class="item" style="background-image: url(images/banner3.jpg)">
                   <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                             <h1 class="broadway">O.M.S.</h1>
                             <p class="lead skincolored">پیشرو در تنوع و کیفیت</p>
                        </div>
                   </div>
              </li>
         </ul>
    </div>
</section>
	<div class="main">
<div class="container triangles-of-section">
  <div class="triangle-up-left"></div>
  <div class="square-left"></div>
  <div class="triangle-up-right"></div>
  <div class="square-right"></div>
</div>



													<section class="light"> <div class="container">  <div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-4  text-center">
  <img alt='img-responsive' src='images/logo.png'>
  <hr>
  <p dir="rtl" align="justify">شرکت <span class="broadway">OMS</span> در سال 1976 میلادی در زمینه تولید محصولات استیل آشپزخانه با ظرفیت تولید سالانه 1/850/000 محصول فعالیت خود را آغاز نمود. محصولات .O.M.S با هدف ثبات در کیفیت بالا هم اکنون از بخش فروش ترکیه فراتر رفته و به بسیاری از کشور های جهان صادر میگردد. </p>


</div></div><hr><div class="col-md-4 col-md-offset-1 text-center"><div class='feature_teaser'>
  <img alt='responsive' src='images/cat2.jpg' >
  <h2>محصولات استیل</h2>
<ul dir="rtl">
	<li><i class="fa fa-check"></i> قابلمه تک </li>
    <li><i class="fa fa-check"></i> تابه (تک دسته) </li>
    <li><i class="fa fa-check"></i> تابه (دودسته) </li>
    <li><i class="fa fa-check"></i> قابلمه تک خمره ای </li>
    <li><i class="fa fa-check"></i> قابلمه تک اسپاگتی </li>
    <li><i class="fa fa-check"></i> و ... </li>
</ul>
<a href="?page=products&catid=1" class="wpcf7-form-control wpcf7-submit btn btn-primary btn btn-primary">مشاهده محصولات</a>

</div></div><div class="col-md-4 col-md-offset-2  text-default" ><div class='feature_teaser'>
  <img alt='responsive' src='images/cat3.jpg'>
  <h2>محصولات سرامیک</h2>
<ul dir="rtl">
	<li><i class="fa fa-check"></i> سرویس قابلمه </li>
    <li><i class="fa fa-check"></i> تابه (تک دسته) </li>
    <li><i class="fa fa-check"></i> تابه (دودسته) </li>
    <li><i class="fa fa-check"></i> قابلمه تک </li>
    <li><i class="fa fa-check"></i> تابه گریل </li>
    <li><i class="fa fa-check"></i> و ... </li>
</ul>
<a href="?page=products&catid=2" class="wpcf7-form-control wpcf7-submit btn btn-primary btn btn-primary">مشاهده محصولات</a>
</div>  </div>  </div></section><section class="para"> <div class="container" >  <div class="row"><div class="col-md-12  text-default" ><div class="call_to_action" dir="rtl"><h3><strong><span class="rotate">زیبایی, ظرافت, استحکام</span></strong> با محصولات <span style="font-family:broadway;color:#dd1a21;">oms</span> </h3><h4>آشپزخانه خود را زیبا کنید</h4></div></div>  </div>  </div></section><section class="light_section">  <div class="container triangles-of-section">    <div class="triangle-up-left"></div>    <div class="square-left"></div>    <div class="triangle-up-right"></div>    <div class="square-right"></div>  </div> <div class="container">  <div class="row"><h2 class="section_header fancy centered"><span style="font-family:broadway;color:#dd1a21;">OMS</span> جدیدترین محصولات <small>برای شما غرور به ارمغان آورده ایم</small></h2><div class="col-md-12  text-default" ><div class="portfolio_strict">
                    <div class="row isotope_portfolio_container" id="cont_1973">
                    
                    
<?php		  
	$home_query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 6 ; ";
	$home_result = mysqli_query($connection , $home_query);
	while($home_row = mysqli_fetch_assoc($home_result)){
	   echo "<div class='sub_cat$home_row[sub_cat_id] col-sm-4 col-md-4'>
			<div class='portfolio_item'>
			  <a href='?page=productdetail&id=$home_row[id]'>
				 <figure style='background-image:url(images/products/$home_row[product_image])'>
					  <figcaption>
						   <div class='portfolio_description'>
								<h3 dir='rtl'>$home_row[product_name]</h3>
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
<script>jQuery(window).load(function() {
"use strict"; 
  var container = jQuery('#cont_1973'); 
  container.isotope({ 
  });   jQuery('#filt_1973 a[data-filter="*"]').addClass('active'); 
  jQuery('#filt_1973 a').click(function(){ 
    jQuery('#filt_1973 a').removeClass('active'); 
    jQuery(this).addClass('active'); 
    var selector = jQuery(this).attr('data-filter'); 
    container.isotope({ filter: selector }); 
    return false; 
  }); 
}); 
//used for window resize
jQuery(window).resize(function() {
"use strict";
var container = jQuery('#cont_1973');
container.isotope({ });
});
</script><div class="centered_button"><a class="btn btn-primary" target="_blank" title="MORE WORK" href="#">مشاهده محصولات</a></div></div>  </div>  </div></section>
				 	
									
									
				     
            <section class="twitter_feed_wrapper skincolored_section">
        <div class="container">
          <div class="row">
               <div class="twitter_feed_icon wow fadeInDown"><a href="#"><span>OMS</span></a></div>
               <div id="twitter_flexslider" class="flexslider">
                    <ul class="slides">
                                              <li class="item">
                          <blockquote>
                              <p>پیشرو در نوآوری و کیفیت</p>
                          </blockquote>
                        </li>  
                                              <li class="item">
                          <blockquote>
                              <p>با بیش از 35 سال سابقه درخشان</p>
                          </blockquote>
                        </li>  
                                              <li class="item">
                          <blockquote>
                              <p>زیبایی، استحکام، ظرافت</p>
                          </blockquote>
                        </li>  
                                          </ul>
              </div>
          </div>
        </div>
      </section>