<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$thename='Leaders Tutors'; 
	$website_url='http://localhost/projects/leaderstutors.com';
	//$website_url='http://192.168.0.186/projects/leaderstutors.com';
	//$website_url='https://leaderstutors.com';
?>

<script>
	//////////////////online constants///////////////////////
	//var website_url='https://leaderstutors.com';
	var website_url='http://localhost/projects/leaderstutors.com';
	//var website_url='http://192.168.0.186/projects/leaderstutors.com';

	var apiKey = 'f3f68f9fb56337fbe3842c8fb9ee54e9';
	var site_local_url=website_url+'/config/content-page';
	var endPoint='https://leaderstutors.com/api/dev'; /// admin local portal url
	var admin_login_local_url=website_url+"/admin/config/code"; /// admin login local url
	var admin_portal_url=website_url+"/admin/a";/// admin portal url
	var admin_local_portal_url=website_url+"/admin/a/config/code"; /// admin local portal url

	//////////////////// USER LINKS /////////////////////////
	var user_local_signup_url=website_url+"/account/sign-up/config/code" /// user local sign-up url
	var user_login_local_url=website_url+"/account/login/config/code"	/// For user login local url
	var user_portal_url=website_url+"/account/" /// user portal url
	var user_local_portal_url=website_url+"/account/config/code" /// user local portal url
</script>

