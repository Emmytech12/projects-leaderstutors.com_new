<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="ALL">
<meta name="Engine" content="all">
<meta name="distribution" content="global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo $website_url ?>/user/portal/all-images/images/icon.png" rel="shortcut icon" type="image-png" />

<link href="<?php echo $website_url ?>/account/portal/style/awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url ?>/account/portal/style/icons-1.10.2/font/bootstrap-icons.css" type="text/css" rel="stylesheet">
<link href="<?php echo $website_url ?>/account/portal/style/animate.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo $website_url ?>/account/portal/style/aos.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url ?>/account/portal/style/paramount.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url ?>/account/portal/style/main-style.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url ?>/account/portal/style/scrollbar.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url ?>/account/portal/style/nav-style.css" type="text/css" rel="stylesheet" />


<script src="<?php echo $website_url ?>/account/portal/js/jquery-v3.6.1.min.js"></script>
<script>
  let login_user_session = JSON.parse(sessionStorage.getItem("login_user_session"));
  if (login_user_session) {
    var login_user_id = login_user_session.user_id;
    var login_access_key = login_user_session.access_key;
    alert(login_user_id);
  } else {
    sessionStorage.setItem("login_staff_session", JSON.stringify(''));
    window.parent.location.href = website_url + "/account/login/";
  }
</script>
<script src="<?php echo $website_url ?>/account/portal/js/scripts.js"></script>
<script src="<?php echo $website_url ?>/account/portal/js/aos.js"></script>

<script src="<?php echo $website_url ?>/account/portal/js/canvasjs.min.js"></script>
<script src="<?php echo $website_url ?>/account/portal/js/superplaceholder.js"></script>

<meta property="og:type" content="Website" />