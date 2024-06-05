<?php if ($page=='dashboard'){?>

                    <div class="table-div animated fadeIn" id="search-content">
                        <div class="div-in">
                            <div class="container-title title2"><i class="bi-book"></i>  LIST OF COURSES </div>
                                <div class="input-search-div">
                                    <!-- <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field" placeholder="Type here to search..." title="Type here to search" /> -->
                                    <button type="button" class="top-btn" onClick="_get_page('exam_category', 'exam')">Subcribe <i class="bi bi-box-arrow-in-up-right"></i></button>
                                </div>
                            <div class="table-div-in">
                                <table class="table" cellspacing="0" style="width:100%" id="fetch_subcription_with_limit" >

                                    <script>_get_fetch_all_user_subscription('<?php echo $page?>','','','','')</script>
                                <tr class="tb-col">
                                    <td>SN</td>
                                    <td>SUBJECT</td>
                                    <td>NO OF TOPIC</td>
                                    <td>SUB-TOPIC</td>
                                    <td>DATE</td>
                                    <td>DUE DATE</td>
                                    <td>ACTION</td>
                                </tr> 

                                 <tr>
                                    <td>1</td>
                                    <td>ENGLISH LANGUAGE</td>
                                    <td>NOUN</td>
                                    <td>NOUN PHRASE</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                                </tr>

                               
                                </table>
                            </div>
                            <div class="bottom-count-div">
                            <span id="sub_count">0</span> of <span id="sub_total_count">0</span>
                            <button class="top-btn bottom-btn" onClick="_get_page('subscription', 'subscriptions')" id="subscriptions" type="button" ><i class="bi bi-eye"></i> View All</button>
                            </div>
                        </div>

                    </div>




                    
                    <div class="table-div animated fadeIn" id="search-content">
                        <div class="div-in">
                            <div class="container-title title2"><i class="bi-bar-chart"></i>  STUDENT PERFORMANCE </div>
                            <div class="table-div-in">
                                <div class="chart-div">

                                    <div id="chartContainer" style="width:100%; height:300px; margin:auto;"></div>
                 
                                    <script>
                                            $(document).ready(function() {
                                            var chart = new CanvasJS.Chart("chartContainer", {
                                                animationEnabled: true,
                                                title:{
                                                    text: ""
                                                },
                                                axisX:{
                                                    valueFormatString: "DD MMM",
                                                    crosshair: {
                                                        enabled: true,
                                                        snapToDataPoint: true
                                                    }
                                                },
                                                axisY: {
                                                    title: "",
                                                    includeZero: false,
                                                    valueFormatString: "N##0.00",
                                                    crosshair: {
                                                        enabled: true,
                                                        snapToDataPoint: true,
                                                        labelFormatter: function(e) {
                                                            return "N" + CanvasJS.formatNumber(e.value, "##0.00");
                                                        }
                                                    }
                                                },
                                                        
                                                data: [{
                                                    type: "line",
                                                    xValueFormatString: "DD MMM",
                                                    yValueFormatString: "N##0.00",

                                                    dataPoints: [   
    
                                                        { x:  new Date(2020, 01, 05), y: 1000 },
                                                        { x: new Date(2020, 02, 05), y: 4000 },
                                                        { x: new Date(2020, 03, 05), y: 2000 },
                                                        { x: new Date(2020, 04, 05), y: 6000 },
                                                        { x: new Date(2020, 05, 05), y: 9000 },
                                                        { x: new Date(2020, 06, 05), y: 5000 }  

                                                    ]
                                                }]
                                                
                                            });
                                            chart.render();
                                            })
                                    </script>

                                 </div>




                                <div class="chart-div">
                                    <div id="chartContainer1" style="width:100%; height:300px; margin:auto;"></div>
                                    
                                    <script type="text/javascript">
                                    var options = {
                                    title: {
                                    text: "" /*My Performance*/
                                    },
                                    data: [{
                                    type: "pie",
                                    startAngle: 45,
                                    showInLegend: "False",
                                    legendText: "{label}",
                                    indexLabel: "{label} ({y})",
                                    yValueFormatString:"#,##0.#"%"",
                                    dataPoints: [
                                    { label: "Outstanding", y: 300},
                                    { label: "Pending", y: 200},
                                    { label: "Processing", y: 100},
                                    { label: "Ready", y: 300},
                                    { label: "Delivered", y: 200},
                                    ]
                                    }]
                                    };
                                    $("#chartContainer1").CanvasJSChart(options);
                                    </script>
                                </div>


                            </div>
                        </div>
                    </div>
<?php }?>







<?php if ($page=='exam_category'){ ?>
    <div class="container-div">
        <div class="div-in">    
             <div class="container-title title2"><i class="bi-pencil-square"></i> EXAM'S LIST</div>
             <button type="button" class="top-btn top-btn2" onClick="_get_form('add_more_exam')"> <i class="bi-plus-square"></i> Add More Exam </button>
            
             <div class="input-search-div input-search2">
                <input id="search_txt" onkeyup="_search_content('<?php echo $page?>','','')" type="text" class="text_field text_field2" placeholder="Type here to search..." title="Type here to search" />
             </div>

             <br clear="all" />


                <div class="fetch animated fadeIn" id="fetch_exam_details">
                        <script> _get_fetch_reg_exam('<?php echo $page?>'); </script>

                    <!-- <div class="fetch-div animated fadeIn">			
					<div class="record-content-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php// echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt="topics"/>
                            </div>

                             <div class="text-div">
                                <h2>WAEC</h2>
                                    <p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
                                <div class="count-div">
                                    <div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE" id="" >ACTIVE</span></div>
                                   <button class="btn" title="VIEW SUBJECT" onClick="_get_page('subject', 'exam')"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>
                                </div>
                            </div>
                        </div> 
					</div> -->
              
                </div>
            </div> 
        </div> 
            
            <br clear="all" />
    </div>

    <script> 
        var search_content =['Type here to search...', 'Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'];
        _placeholder(search_txt,search_content);
    </script>
<?php } ?>









<?php if ($page=='subject'){ ?>
    <div class="container-div">
        <div class="div-in"> 
            <div class="container-title title2"><i class="bi-book"></i></span> EXAM / <span id="exam_abbreviation">xxx</span> / <span style="color:var(--body-color);">SUBJECT'S LIST</span> </div>
            <div class="input-search-div">
                <input id="search_txt" onkeyup="_search_content('<?php echo $page?>','<?php echo $ids?>','')" type="text" class="text_field full_search full_search2" placeholder="Type here to search..." title="Type here to search" />
            </div>
            <br clear="all"/>
            <br clear="all"/>
            
                <div class="fetch-div animated fadeIn" id="fetch_subject_details">			
                 
                <script> _get_fetch_exam_subject('<?php echo $ids?>');</script>
                
                     <!-- <div class="grid-div">
                       <div class="div-in">
                            <div class="image-div">
                                <img src="<?php //echo $website_url?>/uploaded_files/subject_pix/chemistry.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>CHEMISTRY</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div>  -->

                    


				</div> 

               
            </div> 
                 <br clear="all" />
        </div>
     <script>
        var search_content = ['Type here to search...','Subject Name e.g Maths, English, Physics'];
        _placeholder(search_txt,search_content);
    </script>
    
<?php } ?>








<?php if ($page=='topics'){ ?>
    <div class="container-div">
        <div class="div-in"> 
            <div class="container-title title2"><i class="bi-book"></i></span> EXAM / <span id="exam_abbreviation">WAEC</span> / <span id="subject_name">xxx</span> / <span style="color:var(--body-color);">TOPIC'S LIST </span></div>
            <div class="input-search-div">
                <input id="search_txt" onkeyup="_search_content('<?php echo $page?>','<?php echo $ids?>','<?php echo $other_ids?>')" type="text" class="text_field search_right" placeholder="Type here to search..." title="Type here to search" />
            </div>
            <br clear="all"/>
           			
                    
                <div class="faq-back-div" >
                    <div class="faq-text-div ">
                        <div class="fetch-div animated fadeIn" id="fetch_topic">
                           
                            <script> _get_fetch_topic('<?php echo $ids?>','<?php echo $other_ids?>')</script>
                          
                        </div>

                    </div>
                </div> 





        </div> 

        <br clear="all" />
</div>
     <script>
        var search_content =['Type here to search...','Top Name e.g Statistic, Geometry'];
        _placeholder(search_txt,search_content);
    </script>
    
<?php } ?>








<?php if ($page=='videos'){ ?>
    <div class="container-div">
        <div class="div-in"> 
            <div class="container-title title2"><i class="bi-book"></i></span> EXAM / <span id="exam_abbreviation">xxx</span> / <span id="subject_name">xxx</span> / <span id="topic_name">xxx </span> / <span id="sub_topic_name">xxx </span> /<span class="list">VIDEOS</span></div>
            <div class="input-search-div">
                <input id="search_txt" onkeyup="_search_content('<?php echo $page?>','<?php echo $ids?>','<?php echo $other_ids?>')" type="text" class="text_field search_right" placeholder="Type here to search..." title="Type here to search" />
            </div>
            <br clear="all"/>
           			
                    
                <div class="faq-back-div" >
                    <div class="faq-text-div ">
                        <div class="quest-faq-div animated fadeIn">
                            <div class="fetch-div animated fadeIn" id="fetch_sub_topic_videos">
                            <script> _get_fetch_sub_topic_video('<?php echo $ids?>')</script>
                                   
                          
                            </div>
                                     <!-- <div class="faq-answer-div">
                                        <div class="topics-content-div">
                                            <div class="overlay-div"></div>
                                            <div class="image-div">
                                                <img src="<?php //echo $website_url?>/uploaded_files/subject_pix/default.png" alt=""/>
                                            </div>
                                            <div class="text">
                                                <h4>MY VIDEOS fgfdsgdfg vcxbbgdh dfhhfhfdghfdhf</h4>
                                                <p>This is my videossakbhbhbhjfd dsfbhjdfshbjdfbhjdfsbhjdfs nsdfhbjfhbjfdsbdfsbhn fdsbhjdfshbjdfsbhjdfbhjdfh  bjdfsnbbhjfdsbhjdfsbhjfdsbhjdfsbfs</p>
                                                <hr/>
                                                <button class="btn btn2" title="SUBCRIBE" onclick="_get_page('user_subcription');">PLAY VIDEO <i class="bi-play"></i></button>
                                                <div class="details">VOLUME 1</div>
                                                <div class="details">FREE</div>
                                                <div class="details">00:02:20</div>
                                            </div>
                                        </div>
                                    </div> -->
                        </div>
                    </div> 





        </div> 

        <br clear="all" />
</div>
     <script>
        var search_content =['Type here to search...', 'Video Name e.g Statistic, Geometry'];
        _placeholder(search_txt,search_content);
    </script>
    
<?php } ?>






<?php if ($page=='subscription'){?>

<div class="table-div animated fadeIn" id="search-content">
    <div class="div-in">
             <div class="container-title title2"><i class="bi-pencil-square"></i>  EXAM SUBCRIPTION </div>
            <div class="input-search-div search-div2">
                <div class="custom_search">Custom Search: <span>*</span></div>
                <input id="datepicker-from" type="date" class="text_field srchtxt" placeholder="Select Date From" title="Select Date From" />
                <input id="datepicker-to" type="date" class="text_field srchtxt" placeholder="Select Date To" title="Select Date To"/>
                <button type="button" class="top-btn" onclick=" _fetch_custom_report('<?php echo $page?>','custom_search','')"><i class="bi-check"></i>Apply</button>
            </div>
            <div class="text search-container" onclick="select_search()">
                <span id="srch-text">Custom Search</span> &nbsp; &nbsp; <span class="icon"><i class="fa fa-sort-down (alias)"></i></span>
                <div class="srch-select" id="srch-select">
                    <div class="div-in">
                        <div class="title"> Select Date From: <span>*</span></div>
                        <input id="mobile-datepicker-from" type="date" class="text_field" placeholder="Select Date From" title="Select Date From"/>
                        
                        <div class="title"> Select Date To: <span>*</span></div>
                        <input id="mobile-datepicker-to" type="date" class="text_field" placeholder="Select Date To" title="Select Date To"/> <br/>
                        <button class="btn"onclick=" _fetch_custom_report2('<?php echo $page?>','custom_search','')"><i class="bi-check"></i> Apply</button>
                        <button class="btn btn2" onclick="close_search()"><i class="bi-x"></i> Close</button>
                    </div>
                </div>
                </div>
            
        <div class="table-div-in">
            <table class="table" cellspacing="0" style="width:100%" id="fetch_all_subscription_history" >

                <script>_get_fetch_all_user_subscription('<?php echo $page?>','','','','')</script>
            <!-- <tr class="tb-col">
                    <td>SN</td>
                    <td>EXAM</td>
                    <td>SUBJECT</td>
                    <td>TOPIC</td>
                    <td>SUB-TOPIC</td>
                    <td>DATE</td>
                    <td>DUE DATE</td>
                    <td>STATUS</td>
                    <td>ACTION</td>
                </tr> -->
            <!-- 
                <tr>
                    <td>1</td>
                    <td class="logo-tb"><div class="logo-div"><img src="<?php// echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                    <td>ENGLISH LANGUAGE</td>
                    <td>NOUN</td>
                    <td>NOUN PHRASE</td>
                    <td>2023-08-03 12:25:27</td>
                    <td>2023-08-03 12:25:27</td>
                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                </tr> -->

            </table>
        </div>
            <div class="bottom-count-div">
                <span id="sub_count">0</span> of <span id="sub_total_count">0</span>
                <button class="top-btn bottom-btn" type="button" ><i class="bi bi-eye"></i> View More</button>
            </div>
    </div>

</div>

<script> 
	var search_content =['Type here to search...', 'Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'];
    _placeholder(search_txt,search_content);
</script>
<?php }?>









<?php if ($page=='transactions'){?>

<div class="table-div animated fadeIn" id="search-content"> 
    <div class="div-in">
            <div class="container-title title2"><i class="bi bi-credit-card"></i>  TRANSACTIONS </div>
                    <div class="input-search-div search-div2">
                        <div class="custom_search">Custom Search: <span>*</span></div>
                        <input id="datepicker-from" type="date" class="text_field srchtxt" placeholder="Select Date From" title="Select Date From" />
                        <input id="datepicker-to" type="date" class="text_field srchtxt" placeholder="Select Date To" title="Select Date To"/>
                        <button type="button" class="top-btn" onclick=" _fetch_custom_report('<?php echo $page?>','custom_search','')"><i class="bi-check"></i>Apply</button>
                    </div>
                    <div class="text search-container" onclick="select_search()">
                        <span id="srch-text">Custom Search</span> &nbsp; &nbsp; <span class="icon"><i class="fa fa-sort-down (alias)"></i></span>
                        <div class="srch-select" id="srch-select">
                            <div class="div-in">
                                <div class="title"> Select Date From: <span>*</span></div>
                                <input id="mobile-datepicker-from" type="date" class="text_field" placeholder="Select Date From" title="Select Date From"/>
                                
                                <div class="title"> Select Date To: <span>*</span></div>
                                <input id="mobile-datepicker-to" type="date" class="text_field" placeholder="Select Date To" title="Select Date To"/> <br/>
                                <button class="btn"onclick=" _fetch_custom_report2('<?php echo $page?>','custom_search','')"><i class="bi-check"></i> Apply</button>
                                 <button class="btn btn2" onclick="close_search()"><i class="bi-x"></i> Close</button>
                            </div>
                        </div>
                     </div>

                <div class="table-div-in">
                    <table class="table" cellspacing="0" style="width:100%" id="fetch_all_transaction_history">
                    <script>_get_fetch_all_transaction('<?php echo $page?>','', '','','')</script>
                    <!-- <tr class="tb-col">
                            <td>SN</td>
                            <td>DATE</td>
                            <td>TRANSACTION ID</td>
                            <td>TRANSACTION TYPE</td>
                            <td>TRANSACTION METHOD</td>
                            <td>AMOUNT</td>
                            <td>STATUS</td>
                            <td>ACTION</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2023-08-03 12:25:27</td>
                            <td>TRANS00012384883</td>
                            <td>CREDIT</td>
                            <td>CREDIT/DEBIT CARD</td>
                            <td><span>₦</span> 2,000.00</td>
                            <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                        </tr> -->


                    
                </table>
            </div>
            <div class="bottom-count-div">
                <span id="trans_count">0</span> of <span id="trans_total_count">0</span>
                <button class="top-btn bottom-btn" type="button" ><i class="bi bi-eye"></i> View More</button>
            </div>
    </div>
</div>

<?php }?>







<?php if ($page=='wallet_history'){?>

<div class="table-div animated fadeIn" id="search-content"> 
    <div class="div-in">
            <div class="container-title title2"><i class="bi bi-credit-card"></i>  WALLET HISTORY </div>
                    <div class="input-search-div search-div2">
                        <div class="custom_search">Custom Search: <span>*</span></div>
                        <input id="datepicker-from" type="date" class="text_field srchtxt" placeholder="Select Date From" title="Select Date From" />
                        <input id="datepicker-to" type="date" class="text_field srchtxt" placeholder="Select Date To" title="Select Date To"/>
                        <button type="button" class="top-btn" onclick=" _fetch_custom_report('<?php echo $page?>','custom_search','')"><i class="bi-check"></i>Apply</button>
                    </div>
                   
                    <div class="text search-container" onclick="select_search()">
                        <span id="srch-text">Custom Search</span> &nbsp; &nbsp; <span class="icon"><i class="fa fa-sort-down (alias)"></i></span>
                        <div class="srch-select" id="srch-select">
                            <div class="div-in">
                                <div class="title"> Select Date From: <span>*</span></div>
                                <input id="mobile-datepicker-from" type="date" class="text_field" placeholder="Select Date From" title="Select Date From"/>
                                
                                <div class="title"> Select Date To: <span>*</span></div>
                                <input id="mobile-datepicker-to" type="date" class="text_field" placeholder="Select Date To" title="Select Date To"/> <br/>
                                <button class="btn"onclick=" _fetch_custom_report2('<?php echo $page?>','custom_search','')"><i class="bi-check"></i> Apply</button>
                                <button class="btn btn2" onclick="close_search()"><i class="bi-x"></i> Close</button>
                            </div>
                        </div>
                     </div>




                    <div class="table-div-in">
                    <table class="table" cellspacing="0" style="width:100%" id="fetch_all_wallet_history">
                    <script> _get_fetch_all_wallet_payment('<?php echo $page?>','')</script>
                            <!-- <tr class="tb-col">
                                <td>SN</td>
                                <td>DATE</td>
                                <td>TRANSACTION ID</td>
                                <td>BALANCE BEFORE</td>
                                <td>AMOUNT LOADED</td>
                                <td>BALANCE AFTER</td>
                                <td>TRANSACTION TYPE</td>
                                <td>STATUS</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td><span>₦</span> 1,000.00</td>
                                <td><span>₦</span> 3,000.00</td>
                                <td><span>₦</span> 4,000.00</td>
                                <td>CREDIT</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            </tr> -->

                     </table>
                </div>
            <div class="bottom-count-div">
                <span id="current_count">0</span> of <span id="total_count">0</span>
                <button class="top-btn bottom-btn"  type="button" ><i class="bi bi-eye"></i> View More</button>
            </div>
    </div>
</div>

    <script> 
        var search_content =['Type here to search...', 'Exam ID e.g EXM00000','Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'];
        _placeholder(search_txt,search_content);
    </script>

<?php }?>











<?php if ($page=='user_profile'){?>

<div class="table-div animated fadeIn" id="search-content"> 
    <div class="div-in">
            <div class="container-title title2"><i class="bi bi-person-square"></i> MY ROFILE </div>
                 <br clear="all"/>
            <div class="user-account-div">
                <div class="profile-div">
                    <label>
                    <div class="profile-pix" id="profile_pix"><img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" id="passportimg4"/></div>
                        <input type="file" id="passport" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG"  onchange="user_profile_pix.UpdatePreviewPix(this);" style="display:none;"/>
                    </label>				
                </div>
             

                <div class="profile-div info-div">
                    <div class="title"> FULLNAME: <span>*</span></div>
                        <input id="fullname" type="text" class="text_field" placeholder="FULLNAME" title="FULLNAME" />
                    <div class="title"> EMAIL ADDRESS: <span>*</span></div>
                        <input id="email" type="text" class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS"/>
                    <div class="title"> PHONE NUMBER: <span>*</span> <span style="float:right;font-size:10px;display:none;color:#f00" id="verify_mobile_info">Phone number not accepted!</span></div>
                        <input id="mobile" type="text" onkeypress="isNumber_Check();" class="text_field" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                       
                        <button class="action-btn" type="button" id="update_btn" onclick="_update_user_profile('<?php echo $login_user_id;?>');"><i class="bi-check"></i> UPDATE PROFILE</button>
                 </div>
         
            </div>
    </div>
</div>

    <script>
        _getUserLoginDetails('<?php echo $page?>');
    </script>


<?php }?>





















<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">
$(".sb-container").scrollBox();
</script>
  
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
