<?php 
	if(isset($_POST['submit'])){
	
	$to = 'info@omsco.ir';
	$subject = $_POST['subject'];
	$mail = $_POST['email'];
	$message = 'ایمیل از طرف : '.$mail."\n".'نام و نام خانوادگی : '.$_POST['full_name']."\n".$_POST['message'];

	$headers = "From: $mail<$mail>\n";
	$headers .= "Reply-To: $mail<$mail>\n";
	$headers .= "X-Sender: $mail<$mail>\n";
	$headers .= "X-Mailer: PHP4\n"; //mailer
	//$headers .= "X-Priority: 3\n"; //1 UrgentMessage, 3 Normal
	$headers .= "MIME-Version: 1.0\n";
	//$headers .= "X-MSMail-Priority: High\n";
	//$headers .= "Importance: 3\n";
	//$headers .= "Date: $date\n";
	//$headers .= "Delivered-to: $to\n";
	//$headers .= "Return-Path: $mail<$mail>\n";
	$headers .= "Envelope-from: $mail<$mail>\n";
	$headers .= "Content-Transfer-Encoding: 8bit\n";
	$headers .= "Content-Type: text/plain; charset=UTF-8\n";

mail($to, $subject, $message, $headers);
	
	}
?>

<div class="full_page_photo">
	<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.507664815936!2d51.425650599999976!3d35.65843619999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f91fe05d613d567%3A0x19001f9b23fd8d3!2sTehran%2C+Bagh+-E-+Azari%2C+Kakh+-e-+Javanan!5e0!3m2!1sen!2sir!4v1424513290169" width="100%" height="480"></iframe></div>
	<div class="container">
		<div class="hgroup">
			<div class="hgroup_title animated bounceInUp">
				<div class="container">
					<h1>ارتباط با ما</h1>
				</div>
			</div>
			<div class="hgroup_subtitle animated bounceInUp skincolored">
   				<div class="container">
     				<p>منتظر پیشنهادات شما هستیم</p>
   				</div>
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

	<section class="light">
        <div class="container">
            <div class="row">
                <div class="col-md-4  text-default" >
                    <div class="team_member office_address" dir="rtl">
                        <img dir="rtl" src="images/logo.png" width="80%">
                       <hr>
                        <br>
                        <h4>آدرس دفتر مرکزی :</h4>
                        <p>نهران، میدان شوش، خیابان صابونیان، خیابان کاخ جوانان، مجتمع تجاری الغدیر، طبقه سوم، واحد 7 
           
                        </p>
                       
                        <h4>تلفن :</h4>
                        <p>55184468 - 021</p>
                        <h4>فکس :</h4>
                        <p>55188148 - 021</p>
                        <h4>همراه :</h4>
                        <p>4276749 - 0912</p>
                        <p>7958676 - 0912</p>
                        <h4>ایمیل:</h4>
                        <p>info@omsco.ir</p>
                      
                    </div>
                </div>
                <div class="col-md-8  text-default" >
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <div class="wpcf7" id="wpcf7-f4-p23-o1" dir="rtl">
                                <div class="screen-reader-response"></div>
                                <h2>ارتباط با مدیریت</h2>
                                <hr>
                                <form method="post" class="wpcf7-form">
                                  
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <label>ایمیل</label><br />
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" name="email" size="40" class="wpcf7-form-control wpcf7-form-control form-control wpcf7-validates-as-required form-control">
                                            </span>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <label>نام و نام خانوادگی</label><br />
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="text" name="full_name" size="40" class="wpcf7-form-control wpcf7-form-control form-control wpcf7-form-control form-control wpcf7-validates-as-required wpcf7-validates-as-email form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <label>موضوع</label><br />
                                            <span class="wpcf7-form-control-wrap your-subject">
                                                <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-form-control form-control form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <label>متن پیام</label><br />
                                            <span class="wpcf7-form-control-wrap your-message">
                                                <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-form-control wpcf7-form-control form-control form-control"></textarea>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <input type="submit" name="submit" value="ارسال پیام" class="wpcf7-form-control wpcf7-submit btn btn-primary btn btn-primary" />
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
	</section>
    
									