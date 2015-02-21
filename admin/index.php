<?php require_once('core/core.php'); ?>
<?php 
	if(!isset($_SESSION['admin'])){
		header('location: signin.php');
		
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <title>پنل ادمین OMS</title>

    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
    <div class="navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" style="float:left !important">
          	<li><a href="logout.php">خروج</a></li>      
            <li><a href="#">تنظیمات</a></li>
           
            
          </ul>
          <a class="navbar-brand" href="index.php" style="float:right; margin-left:20px;padding-top:15px;font-family:broadway;font-size:28px">O.M.S. <span style="font-size:16px;">collection</span></a>
         
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
      <?php include('include/sidebar.php'); ?>
        <div class="col-sm-10 main-admin">
 

          <?php
		  	if(isset($_GET['page'])){
					if(is_file("include/$_GET[page].php")){
						include("include/$_GET[page].php");
					}else{
						echo 'صفحه مورد نظر وجود ندارد.';}
          			
			}else{
				include('include/main.php');
			}
		  ?>
          	
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
           <script>
		$("#category").change(function(){
			val = $("#category").val();
    $.post("include/ajax.php",{category : val},
    function(data, status){
		$('#product_name').removeAttr('disabled');
		$('#product_name').html(data);
    });
});
		
		$("#category").change(function(){
			
		if($('#category').val() == 1){
			$('#product_count').removeAttr('disabled');
			$('#color').css('display','none');
			}else{
				$('#product_count').attr('disabled','disabled')
				$('#color').css('display','block');
				}
		})
</script>
  </body>
</html>
