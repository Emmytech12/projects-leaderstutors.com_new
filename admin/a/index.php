
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include '../../config/constants.php';?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title>Administrative Portal | <?php echo $thename;?></title>
</head>
<body>
   
<?php include 'header.php'?>
<?php  include 'alert.php'?>
<?php include 'side-bar.php'?>


<div class="content-div">
    <div class="page-title-div animated fadeInDown">
        <div class="div-in">
                <span id="page-title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</span>
                <div class="user-name" >Hi, <span id="login_user_fullname"></span></div>
        </div>
    </div>

    <div id="page-content">
        <script>_get_page('dashboard')</script>	
    </div> 
</div>

<div class="side-div-right">
    <div class="alert-dashboard-title"><div><i class="bi-bell"></i> Recent Activities</div> <span>See All</span></div>
        <div class="alert-dashboard-div animated ZoomIn" id="fetch_dashboard_alert">
                <script> _fetch_dashboard_alert();</script>
        </div>
</div>



<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>




    <!-- <div class="cbt-creation-panel">
        <div class="side-bar">
            <div class="div-in">
                <div class="details-back-div">
                    <div class="video-div">      
                        <div id="view_sub_topic_video" class="video-container">
                            <video src="<?php echo $website_url?>/admin/a/all-images/body-pix/video-slide.mp4" id="videoDisplay" name="sub_video" controls="controls" loop="" class="video-slide"></video>
                        </div>
                        <input name="sub_video" id="video" onchange="showVideo(this)" type="file" style="display:none;">


                        <script>     
                            var videoDisplay = document.getElementById('videoDisplay');
                            var videoInput = document.getElementById('video');
                            var legendElement = document.querySelector('legend');
                            
                            // Add click event listener to the legend element
                            legendElement.addEventListener('click', function () {
                                videoInput.click();
                            });
                        
                            videoInput.addEventListener('change', function () {
                                showVideo(this);
                            });
                        
                            function showVideo(input) {
                                var videoDisplay = document.getElementById('videoDisplay');
                                var videoBackground = document.getElementById('video-background');
                        
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        videoDisplay.src = e.target.result;
                                        videoBackground.style.display = 'none'; // Hide the default background image
                                        videoDisplay.style.display = 'block'; // Show the video
                                    };
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                    </div>

                    <div class="text-div">
                        <div class="list-back-div">
                            <div class="list-div">
                                <div><i class="bi-buildings"></i> Department:</div>
                                <div><span>Junior</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Class:</div>
                                <div><span>Jss 1</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Subject:</div>
                                <div><span>Mathematics</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Week:</div>
                                <div><span>Week 1</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Topic:</div>
                                <div><span>HCM</span></div>
                            </div>

                            <div class="list-div no-border">
                                <div><i class="bi-clock"></i> Class Duration:</div>
                                <div><span>00:01:04</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="title-div">
            <div class="div-in">
                <div class="left-div">
                    <ul>
                        <li class="active-li" id="main_page_contents" onclick="_get_page_contents('question_bank_details','main_page_contents','')">Question Bank </li>
                        <li id="quiz_question_page" onclick="_get_page_contents('quiz_question','quiz_question_page','')">Quiz Question</li>
                        <li id="" onclick="_get_page_contents()">Load Question Manually</li>
                        <li id="" onclick="_get_page_contents()">Load Question Automatically</li>
                    </ul>
                </div>

                <div class="btn-div">
                    <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button>
                </div>             
            </div>
        </div>

        <div class="main-page-content sb-container">
            <div class="div-in">
                <div id="get_page_details">

                    <div class="page-back-div">
                        <div class="top-div">
                            <div class="check-div">
                                <label for="">
                                    <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                    <span>All Questions</span>
                                </label>      
                            </div>

                            <div class="btn-div">
                                <button class="activate-btn"><i class="bi-check2-circle"></i> Activate</button>
                                <button class="activate-btn delete-btn"><i class="bi-trash"></i> Delete</button>
                            </div> 
                        </div>
                        
                        <div class="main-pg-div">
                            <div class="question-div">
                                <div class="top-div">
                                    <div class="check-div">
                                        <label for="">
                                            <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                            <span>Question 1</span>
                                        </label>      
                                    </div>

                                    <div class="btn-div">
                                        <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                                    </div> 
                                </div>

                                <div class="question-list-back-div">
                                    <div class="question-list">
                                        <p>_______ is an electronics Computer</p>  
                                    </div>

                                    <div class="question-list">
                                        <p><span>A</span> Computer</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>B</span> Computer</p>  
                                    </div>
                                    <div class="question-list answer">
                                        <p><span>C</span> Computer</p>  
                                    </div>
                                        
                                    <div class="question-list">
                                        <p><span>D</span> Chair</p>  
                                    </div>                
                                </div>
                            </div>

                            <div class="question-div">
                                <div class="top-div">
                                    <div class="check-div">
                                        <label for="">
                                            <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                            <span>Question 2</span>
                                        </label>      
                                    </div>

                                    <div class="btn-div">
                                        <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                                    </div> 
                                </div>

                                <div class="question-list-back-div">
                                    <div class="question-list">
                                        <p>What is the name of anything?</p>  
                                    </div>

                                    <div class="question-list answer">
                                        <p><span>A</span> Noun</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>B</span> Pronoun</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>C</span> Verb</p>  
                                    </div>
                                        
                                    <div class="question-list">
                                        <p><span>D</span> Adverb</p>  
                                    </div>                
                                </div>
                            </div>

                            <div class="question-div">
                                <div class="top-div">
                                    <div class="check-div">
                                        <label for="">
                                            <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                            <span>Question 3</span>
                                        </label>      
                                    </div>

                                    <div class="btn-div">
                                        <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                                    </div> 
                                </div>

                                <div class="question-list-back-div">
                                    <div class="question-list">
                                        <p>______ is an action words?</p>  
                                    </div>

                                    <div class="question-list">
                                        <p><span>A</span> Noun</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>B</span> Pronoun</p>  
                                    </div>
                                    <div class="question-list answer">
                                        <p><span>C</span> Verb</p>  
                                    </div>
                                        
                                    <div class="question-list">
                                        <p><span>D</span> Adverb</p>  
                                    </div>                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div -->
</body>
</html>
