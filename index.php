<?php require_once('admin/core/core.php'); ?>


<!doctype html>
<html class="no-js" lang="en-US">
<head>
<meta charset="utf-8">
<title> OMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" href="images/icons/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta name='robots' content='index,follow' />
<link rel='stylesheet' id='style-less-css'  href='css/style-3b53c74f60.css' type='text/css' media='all' />
<link rel='stylesheet' id='isotope-plethora-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css-css'  href='css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='mainmenu-css-css'  href='css/mainmenu.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href='font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='simple-text-rotator-css'  href='css/simpletextrotator.css' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-cleanstart-css'  href='css/flexslider.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='css/js_composer.css' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_custom_css-css'  href='css/custom.css?ver=4.3.4' type='text/css' media='screen' />



<script type='text/javascript' src='js/modernizr.custom.48287.js'></script>
<script type='text/javascript' src='js/jquery.js'></script>

<script type='text/javascript' src='js/jquery-migrate.min.js'></script>

</head>
<body class="home page page-id-10 page-template-default sticky_header wpb-js-composer js-comp-ver-4.3.4 vc_responsive">
	<div class="overflow_wrapper">
		<header>
			<div class="container">
				<div class="logo">
					<a class="brand" href="?page=home">
 						
						<span class="logo_title"></span>
            		</a>
				</div>
                <div id="mainmenu" class="menu_container">
                    <label class="mobile_collapser">منو</label> <!-- Mobile menu title -->
                    <ul id="menu-main-menu" class="">
                        <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-30 pull-right <?php if((isset($_GET['page']) && $_GET['page']=='home') || !isset($_GET['page'])) {echo 'active';}?>">
                            <a href="?page=home">صفحه اصلی</a>
                        </li>
                        <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29 pull-right <?php if((isset($_GET['page']) && $_GET['page']=='about')) {echo 'active';}?>">
                            <a href="?page=about">درباره ما</a>
                        </li>
                        <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27 pull-right <?php if((isset($_GET['page']) && $_GET['page']=='contact')) {echo 'active';}?>">
                            <a href="?page=contact">ارتباط با ما</a>
                        </li>
                        <li id="menu-item-1635" class="two-column dropleft menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1635 pull-right <?php if((isset($_GET['page']) && $_GET['page']=='products')) {echo 'active';}?>" dir="rtl">
                            <a href="#">محصولات <span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li id="menu-item-223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-223">
                                        <a href="?page=products&catid=1">استیل</a></li>
                                    <li id="menu-item-224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224">
                                        <a href="?page=products&catid=2">سرامیک</a></li>
                                    
                                </ul>
                         </li>
                         <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27 pull-right <?php if((isset($_GET['page']) && $_GET['page']=='contact')) {echo 'active';}?>">
                           		<a href="?page=contact">نمایشگاه ها</a>
                        </li>
                    </ul>
                </div>
                <div class="triangle-up-left"></div>
                <div class="triangle-up-right"></div>          
            </div>
        </header>
<?php
	if(isset($_GET['page'])){
				if(is_file('include/'.$_GET['page'].'.php')){
					include 'include/'.$_GET['page'].'.php';
					}else{
					die('صفحه مورد نظر وجود ندارد');
					}
				}else{
					include 'include/home.php';
					}
?>
<footer>
	<section class="footer_teasers_wrapper dark_section">
		<div class="container triangles-of-section">
  			<div class="triangle-up-left"></div>
  			<div class="square-left"></div>
  			<div class="triangle-up-right"></div>
  			<div class="square-right"></div>
		</div>
    	<div class="container">
			<div class="row">
            <div id="flickr-widget-4" class="widget flickr col-sm-4 col-md-4 text-right">
                	<div class="pl_latest_news_widget">
               			<h3 class="text-center">درباره ما</h3>
                        <hr>
              			<p dir="rtl" align="justify">
                        شرکت  <span class="broadway red">.O.M.S</span> در سال 1976 میلادی در زمینه تولید محصولات استیل آشپزخانه با ظرفیت تولید سالانه 000/850/1 محصول فعالیت خود را آغاز نمود.
 محصولات <span class="broadway red">.O.M.S</span> با هدف ثبات در کیفیت بالا هم اکنون از بخش فروش ترکیه فراتر رفته و به بسیاری از کشور های جهان صادر میگردد. 

                        </p>
               		</div>
                </div>
                <div id="latestnews-widget-4" class="widget latestnews col-sm-4 col-md-4 text-center">
                	<div class="pl_latest_news_widget">
               			<h3>لینک های مرتبط</h3>
                        <hr>
              			<ul class="footer-link">
                       		 <li>   
                            <a href="?page=home">صفحه اصلی</a>                         
                            </li>
                            <li>   
                            <a href="?page=about">درباره ما</a>                         
                            </li>
                            <li> 
                            <a href="?page=contact">ارتباط با ما</a>
                            </li>
                            <li> 
                            <a href="?page=cat_products">محصولات</a>
                            </li>
                            <li> 
                            <a href="#">نمایشگاه ها</a>
                            </li>

         				</ul>
               		</div>
               	</div>
				<div id="aboutus-widget-4" class="widget aboutus col-sm-4 col-md-4 text-right">
                	<div class="pl_about_us_widget " dir="rtl">
                	<h3 class="text-center">اطلاعات تماس</h3>
                    <hr>
                	<p align="justify" dir="rtl"><i class="fa fa-taxi"></i>
                  		آدرس دفتر مرکزی : تهران، میدان شوش، خیابان صابونیان، خیابان کاخ جوانان، مجتمع تجاری الغدیر، طبقه سوم، واحد 7
                    </p>
                	<p><i class="fa fa-phone"></i>تلقن : 55184468 - 021 </p>
                	<p><i class="fa fa-fax"></i>فکس : 55188148 - 021</p>
                		
                	</div>
                </div>
                
                
                
				</div>
       		</div>
	
	</section>
    <div class="container text-center">
    <div class="aboutus_social text-center">
                			<div class="social_wrapper">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a>
                                <a href="http://"><i class="fa fa-twitter"></i></a>
                                <a href="callto:skype"><i class="fa fa-skype"></i></a>
                                <a href="http://youtube.com"><i class="fa fa-youtube"></i></a>
                			</div>
                		</div>
     </div>                   
	<div class="copyright">
   		<div class="container">
     		<p align="center">تمامی حقوق مادی و معنوی وب سایت محفوظ می باشد.</p>
            <p align="center">طراح : <a href="http://rayweb.ir">رای وب</a></p>
 		</div>
	</div>
</footer>
</div>
</div>

<script type='text/javascript'>
/* <![CDATA[ */
var textRotatorOptions = {"speed":"2500"};
/* ]]> */
</script>
<script type='text/javascript' src='js/jquery.simple-text-rotator.js'></script>
<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/easing.js'></script>
<script type='text/javascript' src='js/jquery.ui.totop.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/cleanstart_twitterfeedslider.js'></script>
<script type='text/javascript' src='js/cleanstart_theme.js'></script>
<script type='text/javascript' src='js/collapser.js'></script>
<script type='text/javascript' src='js/jquery.form.min.js'></script>



<script type='text/javascript'>
/* <![CDATA[ */
var plethora_slider = {"slider_options":{"slideshow":"1","direction":"horizontal","animationloop":"1","slideshowspeed":"10","animationspeed":"600","showarrows":"1","showbullets":"1","randomize":"","pauseonaction":"1","pauseonhover":"1"}};
/* ]]> */
</script>
<script type='text/javascript' src='js/cleanstart_fmslider.js'></script>

</body>
</html>
