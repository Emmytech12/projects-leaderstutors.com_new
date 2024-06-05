<?php include '../config/constants.php'?>
<?php include 'config/welcome_profile.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title>User Account | <?php echo $thename;?></title>
</head>
<script src="https://js.paystack.co/v1/inline.js"></script>
<body>
<?php include 'header.php'?>
<?php include 'side-bar.php'?>

	<div class="page-content">
		<div class="page-div-in">
			<?php $callclass->_UserWelcomeProfile($website_url);?>
			<div id="page-content">
				<?php $page='dashboard';?>
				<?php require_once 'content/page-content.php'?>
			</div>
		</div>
	</div>

	
</body>
</html>
