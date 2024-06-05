<?php include '../../../config/config.php'?>
<?php include '../../../config/session_validation.php'?>

<?php  $video_id =$_GET['video_id'];?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../meta.php'?>
<title>User Portal | <?php echo $thename;?></title>
</head>
<body>

           

    <div class="page-content-div sb-container">
        <div class="content-side-div">
             <div class="div-in">
            
						<div class="video-div">
							<video id="videoDisplay" controls=""  loop="" class="video-slide" title="">
							<source  src="" type="video/mp4" >
							</video>
						</div>
						<div class="video-details-div">

							<div class="inner-topic-details-div">
								<div class="icons-div">
									<i class="bi-camera-reels"></i>
								</div>
								<div class="text-div">
									Duration
									<h3 id="video_duration"></h3>
								</div> 
							</div>

							<div class="inner-topic-details-div">
								<div class="icons-div">
									<i class="bi-camera-video"></i>
								</div>

								<div class="text-div">
									Volume
									<h3 id="video_volume_name"></h3>
								</div>
							</div>

							<div class="inner-topic-details-div">
								<div class="icons-div">
									<i class="bi-credit-card"></i>
								</div>

								<div class="text-div">
									Pricing
									<h3 id="subscription_pricing_name"></h3> 
								</div>
							</div>

							<div class="inner-topic-details-div">
								<div class="icons-div">
									<i class="bi-clock-history"></i>
								</div>

								<div class="text-div">
									Updated Time
									<h3 id="updated_time"></h3> 
								</div>
							</div>
						</div>

							<div class="detail-div">
								<h2 id="video_title"></h2>
								<div id="video_objective"></div>
							</div>


                <br clear="all"/>
                
						<div class="comment-back-div">
							<div id="disqus_thread"></div>
							<script>
								(function() { // DON'T EDIT BELOW THIS LINE
								var d = document, s = d.createElement('script');
								s.src = 'https://valuehandlers-international-limited.disqus.com/embed.js';
								s.setAttribute('data-timestamp', +new Date());
								(d.head || d.body).appendChild(s);
								})();
							</script>
						</div>

                    <br clear="all"/>


            </div>
        </div>



<script>
	_get_video_subcription_details('<?php echo $video_id?>');
	_disabled_inspect();
</script>
<script type="text/javascript" src="../js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>

</body>


</html>
