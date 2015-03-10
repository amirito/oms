<?php
	$error = '';
	if(isset($_POST['submit']) && $_POST['password']==$_POST['repassword']){
		$setting_query = "UPDATE `admin` SET `password`=SHA1('password') WHERE `id`=$_SESSION[OMS_ADMIN]";
		$setting_result = mysqli_query($connection , $setting_query);
		if($setting_result){
			$error = '<div class="alert alert-success alert-dismissible" role="alert" dir="rtl">
					  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					  <strong>عملیات با موفقیت انجام شد.
					</div>';
			}else{
				$error = '<div class="alert alert-danger alert-dismissible" role="alert" dir="rtl">
							  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							  <strong>اخطار!</strong> خطا در عملیات.
							</div>';
				}
		}




	$user_query = "SELECT * FROM `admin` WHERE `id`=$_SESSION[OMS_ADMIN]";
	$user_result = mysqli_query($connection , $user_query);
	$user_row = mysqli_fetch_assoc($user_result);
?>
<h2 style="text-transform:uppercase">نام کاربر: <?php echo $user_row['user_name']; ?></h2>
<form dir="rtl" method="post" role="form" class="form-horizontal ">
	<div class="form-group">
        <label class="control-label pull-right col-xs-2">کلمه عبور جدید :</label>
         <div class="col-xs-4 pull-right"> 
        <input type="password" name="password" class="form-control">
        </select>
         </div>
    </div>
    <div class="form-group">
        <label class="control-label pull-right col-xs-2">تکرار کلمه عبور :</label>
         <div class="col-xs-4 pull-right"> 
        <input type="password" name="repassword" class="form-control">
        </select>
         </div>
    </div>
    <input type="submit" value="ثبت" name="submit" class="btn btn-success">
    <?php echo $error ?>
</form>