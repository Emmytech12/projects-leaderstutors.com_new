<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>




<?php if ($page=='load_user_wallet'){?>
	<div class="caption-div animated zoomIn ">
    		<div  class="title-div"><i class="bi-credit-card"></i> Load Wallet <div class="close" onclick="_alert_close()"><i class="bi-x"></i></div></div>
            <div class="div-in animated fadeInRight">
            	<div class="alert alert-success">Hi <span id="user_wallet_name"><strong >Xxxx</strong></span>, Kindly enter the amount to load your wallet.</div>
            <div class="title">Enter Amount (₦):<span>*</span> <span style="float:right;font-size:10px;padding-top:7px;display:none;color:#f00" id="amount_info">Amount not accepted!</span></div>
            <input class="text_field" id="wallet_amount" onkeypress="isNumber_Check();" placeholder="0.00" title="Amount" type="tel" onkeypress="return isNumber(event)"/>
            <button class="btn" type="button" id="load_wallet_btn"  title="LOAD WALLET"  onclick="_load_wallet('<?php echo $page?>')" ><i class="bi-credit-card"></i> LOAD WALLET</button>
        </div>
    </div>
    <script>_get_user_login('<?php echo $page?>','<?php echo $login_user_id?>')</script>
<?php } ?>



<?php if ($page=='user_subcription'){?>
	<div class="caption-div animated zoomIn">
    		<div  class="title-div"><i class="bi-credit-card"></i> Subcription <div class="close" onclick="_alert_close()"><i class="bi-x"></i></div></div>
            <div class="div-in animated fadeInRight">
                <div class="alert alert-success">Hi <span><strong id="user_subcription_name">Xxxx</strong></span>, you want to subcribe for <strong id="subscription_name">Xxxx</strong> video tutorials. Amount is <strong>₦<span id="subscription_price"> 2,000.00</span></strong> for <span id="subscription_duration_id"></span> days.</div>
            
                <div class="title">SELECT PAYMENT METHOD: <span>*</span></div>
                <select id="fund_method_id" class="text_field selectinput" title="SELECT PAYMENT METHOD">
                    <option value="" >SELECT PAYMENT METHOD</option>
                    <script>_get_fund_method();</script>
                    <!-- <option value="" class="option_text">PAY WITH CARD</option>
                    <option value="" class="option_text">PAY WITH WALLET</option> -->
                </select>
                <button class="btn" type="button" id="payment_btn"  title="MAKE PAYMENT"  onclick="_payment_subcription('<?php echo $page?>','<?php echo $ids?>')" id="load_wallet_btn"><i class="bi-credit-card"></i> MAKE PAYMENT</button>
            </div>
    </div>
    <script>  _get_subcription_payment_details('<?php echo $ids?>');</script>
    <script>_get_user_login('<?php echo $page?>','<?php echo $login_user_id?>')</script>
<?php } ?>



<?php if ($page=='user_subcription_success'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
				<div class="img"><img src="<?php echo $website_url?>/user/portal/all-images/images/success.gif" /></div>
            <h2>TRANSACTION SUCCESSFUL</h2>
            You have successfully subscribe for <span id="get_subscription_name"></span>.
             <button class="btn" onclick="_get_user_login('<?php echo $page?>','<?php echo $login_user_id?>')" type="button"><i class="bi-check"></i> Done </button>
        </div>
    </div>
<?php } ?>



<?php if ($page=='load_user_wallet_success'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
				<div class="img"><img src="<?php echo $website_url?>/user/portal/all-images/images/success.gif" /></div>
            <h2>TRANSACTION SUCCESSFUL</h2>
            You have successfully fund your wallet.
             <button class="btn" onclick="_get_user_login('<?php echo $page?>','<?php echo $login_user_id?>')" type="button"><i class="bi-check"></i> Done </button>
        </div>
    </div>
<?php } ?>

<?php if ($page=='no_records_found'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
				<div class="img"><img src="<?php echo $website_url?>/user/portal/all-images/images/warning.gif" /></div>
            <h2>NO RECORD FOUND !!</h2>
           No videos available for <strong id="get_subscription_name"></strong>
             <button class="btn" onclick="_get_return_page('<?php echo $page?>', '<?php echo $ids1?>', '<?php echo $ids2?>')" type="button"><i class="bi-check"></i> Okay </button>
        </div>
    </div>
    
<?php } ?>


<?php if ($page=='no_records_found2'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
			<div class="img"><img src="<?php echo $website_url?>/user/portal/all-images/images/warning.gif" /></div>
            <h2>NO RECORD FOUND !!</h2>
            No topic available for <strong id="get_subject_name"></strong>
             <button class="btn" onclick="_get_return_page('<?php echo $page?>', '<?php echo $ids1?>', '<?php echo $ids2?>')" type="button"><i class="bi-check"></i> Okay </button>
        </div>
    </div>
    
<?php } ?>



<?php if ($page=='access_key_validation_info'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
				<div class="img"><img src="<?php echo $website_url?>/user/portal/all-images/images/warning.gif" /></div>
            <h2>INVALID ACCESS TOKEN</h2>
            Please LogIn Again
            <form method="post" action="config/code" name="logoutform">
                <input type="hidden" name="action" value="logout"/>
                <button class="btn" onclick="document.getElementById('logoutform').submit();"><i class="bi-check"></i> Okay, Log-In </button>
            </form>
        </div>
    </div>
<?php } ?>



<?php if ($page=='add_more_exam'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD EXAM</span>
            <div class="close" title="Close" onclick="_alert_close();"><i class="bi-x"></i></div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">

 
                <div class="radio-input-div">
                        <div class="alert alert-success" id="fetch_user_exam">
                            <!-- <label for="">
                                <div class="radio-in-div">
                                    <div class="radio"><input type="checkbox" class="child" name="endorsement_id[]" data-value="DE004" onclick="_driver_endorsement_check(this,'DE004')"><div class="border"></div></div>
                                    <span>JUPEB</span>
                                </div>
                            </label>   -->
                          
                           
                        </div>
                       
                </div>
                    <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_new_exam();"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<script> _get_fetch_all_exam();</script>
<?php } ?>




<?php if ($page=='subscription_video'){?>

    <div class="page-creation-panel">
        <div class="title-div">
            <div class="div-in"><i class="bi-video"></i> VIDEO <button class="close-btn" id="pauseButton" onclick="_alert_close2()"><i class="bi-x-lg"></i></button></div>
        </div>
        <div id="video_subscription_detail_page">
            <iframe src="<?php echo $website_url?>/user/portal/play-video/?video_id=<?php echo $ids?>" type="text/html" style="width:100%; height:100%;" frameborder="0" ></iframe>   
        </div>
  
    </div>


<?php } ?>






<?php if ($page=='app_settings'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="back_icon" style="display:none; cursor:pointer;" ><i class="bi-arrow-left" style="cursor:pointer;" onclick="_prev_page('account_settings_id');" ></i> &nbsp;&nbsp;</span>
        <span id="panel-title"><span id="header_icon"> <i class="bi-gear"></i> </span id="app_text"> APP SETTINGS</span>
            <div class="close" title="Close" onclick="_alert_close();"><i class="bi-x"></i></div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">
            <div class="setting_detail" id="account_settings_id">   

                <div class="settings-div" onclick="_next_page('channge_password','back_icon','password');">
                    <div class="div-in">
                        <div class="icon-div">
                          <i class="bi-lock"></i>
                        </div>
                        <div class="text-div">
                            <h4 id="password">CHANGE PASSWORD</h4>
                            <span>Manage and change password</span>
                            <i class="bi-chevron-right"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="setting_detail" id="channge_password">   
                 <div class="alert">Fill all fields to change your <span>PASSWORD</span>  </div>
                    <div class="title"> OLD PASSWORD: <span>*</span></div>
                    <div class="password-container">
                        <input id="old_password" type="password" onkeyup="_show_password_visibility('old_password','toggle_old_pass')" class="text_field" placeholder="OLD PASSWORD" title="OLD PASSWORD" />
                        <div id="toggle_old_pass"  onclick="_togglePasswordVisibility('old_password','toggle_old_pass')">
                           <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>
                    <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>
                   
                    <div class="title"> NEW PASSWORD: <span>*</span></div>
                    <div class="password-container">
                        <input id="new_password" type="password" class="text_field" onkeyup="_show_password_visibility('new_password','toggle_new_pass')" placeholder="NEW PASSWORD" title="NEW PASSWORD" />
                        <div id="toggle_new_pass"  onclick="_togglePasswordVisibility('new_password','toggle_new_pass')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>

                    <div class="title"> CONFIRMED PASSWORD: <span>*</span> <span id="message">Password Not Match!</span></div>
                    <div class="password-container">
                        <input id="comfirmed_password" type="password" onkeyup="_check_password_match('comfirmed_password','toggle_com_pass')" class="text_field" placeholder="CONFIRMED PASSWORD" title=" CONFIRMED PASSWORD" />
                        <div id="toggle_com_pass"  onclick="_togglePasswordVisibility('comfirmed_password','toggle_com_pass')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>
                   
                    
                    <button class="action-btn" type="button" title="UPDATE" id="update_btn" onclick="_update_password();"> <i class="bi-check"></i> UPDATE PASSWORD </button>
                
            </div>

        </div>
    </div> 
</div>
<?php } ?>










<?php if ($page=='transaction_details'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi bi-credit-card"></i> TRANSACTIONS</span>
            <div class="close" title="Close" onclick="_alert_close();"><i class="bi-x"></i></div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">

            <div id="View_transaction_details"> 
                <!-- <div class="alert alert-success">
                    <span>TRANSACTION DETAILS</span>
                    <div class="trans-statistics">Transaction ID: <div class="value" id="transaction_id">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Transaction Type: <div class="value" id="transaction_type">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Transaction Method: <div class="value" id="transaction_method">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Amount: <div class="value" id="amount"> Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Date: <div class="value" id="date">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Status: <div class="value" id="status">Xxxx</div><br clear="all" /></div>
                </div>

                <div class="alert alert-success">
                    <span>EXAM SUBSCRIPTION DETAILS</span>
                    <div class="trans-statistics">Exam Name: <div class="value" id="view_abbreviation">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Subject Name: <div class="value" id="view_subject_name">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Topic Name: <div class="value" id="view_topic_name">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Sub-Topic Name: <div class="value" id="view_sub_topic_name">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Start Date: <div class="value" id="view_start_date"> Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Due Date: <div class="value" id="view_due_date">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Status: <div class="value" id="view_subcription_status_name">Xxxx</div><br clear="all" /></div>
                </div> -->
                       
                </div>
        </div>
    </div> 
</div>

<script> 
    _get_fetch_all_transaction('<?php echo $page?>','','<?php echo $ids?>','','');
   
</script>

<?php } ?>
