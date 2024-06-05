<?php if ($page == 'load_user_wallet') { ?>
    <div class="caption-div animated zoomIn ">
        <div class="title-div"><i class="bi-credit-card"></i> Load Wallet <div class="close" onclick="_alertClose()"><i class="bi-x"></i></div>
        </div>
        <div class="div-in animated fadeInRight">
            <div class="alert alert-success">Hi <span id="user_wallet_name"><strong>Xxxx Xxxx</strong></span>, Kindly enter the amount to load your wallet.</div>
            <div class="title">Enter Amount (₦):<span>*</span> <span style="float:right;font-size:10px;padding-top:7px;display:none;color:#f00" id="amount_info">Amount not accepted!</span></div>
            <input class="text_field" id="wallet_amount" onkeypress="_isNumberCheck();" placeholder="0.00" title="Amount" type="tel" onkeypress="return isNumber(event)" />
            <button class="btn" type="button" id="load_wallet_btn" title="LOAD WALLET" onclick="_loadWallet('<?php echo $page ?>')"><i class="bi-credit-card"></i> LOAD WALLET</button>
        </div>
    </div>
    <script>
        _getUserLoginDetails('<?php echo $page ?>');
    </script>
<?php } ?>



<?php if ($page == 'user_subcription') { ?>
    <div class="caption-div subcription-caption-div animated zoomIn">
        <div class="title-div"><i class="bi bi-send-check-fill"></i> Subcription <div class="close" onclick="_alertClose()"><i class="bi-x"></i></div>
        </div>
        <div class="div-in animated fadeInRight">
            <div class="alert alert-success">Hi <span><strong id="user_subscription_name">Xxxx</strong></span>, you are about to subscribe for a new <span>tutorial session</span>. Subscription fee is <strong>₦<span id="subscription_amount"> 0.00</span></strong></div>

            <div class="title">SELECT DEPARTMENT: <span>*</span></div>
            <select id="sub_department_id" class="text_field selectinput" title="SELECT DEPARTMENT" onChange="_getSelectDepartmentClass('sub_department_id', 'sub_class_id')">
                <option value="">SELECT DEPARTMENT</option>
            </select>

            <div class="title">SELECT CLASS: <span>*</span></div>
            <select id="sub_class_id" class="text_field selectinput" title="SELECT PAYMENT METHOD">
                <option value="">SELECT CLASS</option>
            </select>

            <div class="title">SELECT PAYMENT METHOD: <span>*</span></div>
            <select id="sub_payment_method_id" class="text_field selectinput" title="SELECT PAYMENT METHOD">
                <option value="">SELECT PAYMENT METHOD</option>
            </select>

            <button class="btn" type="button" id="submit_btn" title="MAKE PAYMENT" onclick="_userSubscriptionPayment()"><i class="bi-credit-card"></i> MAKE PAYMENT</button>
        </div>
    </div>
    <script>
        _getUserLoginDetails('<?php echo $page ?>');
    </script>
<?php } ?>





<?php if ($page == 'user_subcription_success') { ?>
    <div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
            <div class="img"><img src="<?php echo $website_url ?>/account/all-images/images/success.gif" /></div>
            <h2>SUBCRIPTION SUCCESSFUL</h2>
            Hi <span id="user_subscription_name"></span>, you have successfully subscribe for a new tutorial session.  <br>
            Department: <span id="user_sub_department_name"></span>, Class: <span id="user_sub_class_name"></span>
            <button class="btn" onclick="_alertClose()" type="button"><i class="bi-check"></i> Done </button>
        </div>
    </div>
    <script>
        _getUserLoginDetails('<?php echo $page ?>');
    </script>
<?php } ?>


<?php if ($page == 'load_user_wallet_success') { ?>
    <div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
            <div class="img"><img src="<?php echo $website_url ?>/account/all-images/images/success.gif" /></div>
            <h2>TRANSACTION SUCCESSFUL</h2>
            Hi <span id="user_load_wallet_name"></span>, you have successfully fund your wallet.
            <button class="btn" onclick="_alertClose()" type="button"><i class="bi-check"></i> Done </button>
        </div>
    </div>
    <script>
        _getUserLoginDetails('<?php echo $page ?>');
    </script>
<?php } ?>






<?php if ($page == 'tutorial_video') { ?>
    <div class="page-creation-panel">
        <div class="title-div">
            <div class="div-in"><i class="bi-video"></i>TUTORIAL VIDEO <button class="close-btn" id="pauseButton" onclick="_alertClose2()"><i class="bi-x-lg"></i></button></div>
        </div>
        <div id="video_subscription_detail_page">
            <iframe src="<?php echo $website_url ?>/account/materials/?page=<?php echo $page ?>&tutorial_id=<?php echo $ids ?>" type="text/html" style="width:100%; height:100%;" frameborder="0"></iframe>
        </div>
    </div>
<?php } ?>


<?php if ($page == 'tutorial_note') { ?>
    <div class="page-creation-panel">
        <div class="title-div">
            <div class="div-in"><i class="bi-video"></i> TUTORIAL NOTE <button class="close-btn" id="pauseButton" onclick="_alertClose2()"><i class="bi-x-lg"></i></button></div>
        </div>
        <div class="page-content-div sb-container">
            <div class="content-side-div">
                <div class="div-in">

                    <div id="ajax_loader"></div>

                    <div id="fetch_tutorial_details">

                        <div id="tutorial_details">
                            <embed id="pdfFile" src="" type="application/pdf" width="100%" height="450px" style="display: none;">
                        </div>
                        <div class="video-details-div">

                            <div class="inner-topic-details-div">
                                <div class="icons-div">
                                    <i class="bi-house-fill"></i>
                                </div>

                                <div class="text-div">
                                    Class
                                    <h3 id="tutorial_class">Xxxx Xxxx</h3>
                                </div>
                            </div>

                            <div class="inner-topic-details-div">
                                <div class="icons-div">
                                    <i class="bi-pencil-square"></i>
                                </div>
                                <div class="text-div">
                                    Subject
                                    <h3 id="tutorial_subject">Xxxx Xxxx</h3>
                                </div>
                            </div>

                            <div class="inner-topic-details-div">
                                <div class="icons-div">
                                    <i class="bi-calendar-range"></i>
                                </div>

                                <div class="text-div">
                                    Term
                                    <h3 id="tutorial_term">Xxxx Xxxx</h3>
                                </div>
                            </div>

                            <div class="inner-topic-details-div">
                                <div class="icons-div">
                                    <i class="bi-calendar-week"></i>
                                </div>

                                <div class="text-div">
                                    Week
                                    <h3 id="tutorial_week">Xxxx Xxxx</h3>
                                </div>
                            </div>

                        </div>

                        <br clear="all" />
                    </div>

                </div>
                <br clear="all" />
                <br clear="all" />
            </div>
        </div>
    </div>
    </div>
    <script>
        _getTutorialVideosDetails('<?php echo $page ?>', '<?php echo $ids ?>');
        // _disabledInspect();
    </script>

<?php } ?>




<?php if ($page == 'app_settings') { ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="fly-title-div">
            <div class="in">
                <span id="back_icon" style="display:none; cursor:pointer;"><i class="bi-arrow-left" style="cursor:pointer;" onclick="_prevPage('account_settings_id');"></i> &nbsp;&nbsp;</span>
                <span id="panel-title"><span id="header_icon"> <i class="bi-gear"></i> </span id="app_text"> APP SETTINGS</span>
                <div class="close" title="Close" onclick="_alertClose();"><i class="bi-x"></i></div>
            </div>
        </div>

        <div class="container-back-div sb-container">
            <div class="inner-div">
                <div class="setting_detail" id="account_settings_id">

                    <div class="settings-div" onclick="_nextPage('channge_password','back_icon','password');">
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
                    <div class="alert">Fill all fields to change your <span>PASSWORD</span> </div>
                    <div class="title"> OLD PASSWORD: <span>*</span></div>
                    <div class="password-container">
                        <input id="old_password" type="password" onkeyup="_showPasswordVisibility('old_password','toggle_old_pass')" class="text_field" placeholder="OLD PASSWORD" title="OLD PASSWORD" />
                        <div id="toggle_old_pass" onclick="_togglePasswordVisibility('old_password','toggle_old_pass')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>
                    <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>

                    <div class="title"> NEW PASSWORD: <span>*</span></div>
                    <div class="password-container">
                        <input id="new_password" type="password" class="text_field" onkeyup="_showPasswordVisibility('new_password','toggle_new_pass')" placeholder="NEW PASSWORD" title="NEW PASSWORD" />
                        <div id="toggle_new_pass" onclick="_togglePasswordVisibility('new_password','toggle_new_pass')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>

                    <div class="title"> CONFIRMED PASSWORD: <span>*</span> <span id="message">Password Not Match!</span></div>
                    <div class="password-container">
                        <input id="comfirmed_password" type="password" onkeyup="_checkPasswordMatch('comfirmed_password','toggle_com_pass')" class="text_field" placeholder="CONFIRMED PASSWORD" title=" CONFIRMED PASSWORD" />
                        <div id="toggle_com_pass" onclick="_togglePasswordVisibility('comfirmed_password','toggle_com_pass')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>


                    <button class="action-btn" type="button" title="UPDATE" id="update_btn" onclick="_updatePassword();"> <i class="bi-check"></i> UPDATE PASSWORD </button>

                </div>

            </div>
        </div>
    </div>
<?php } ?>










<?php if ($page == 'transaction_form_details') { ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="fly-title-div">
            <div class="in">
                <span id="panel-title"><i class="bi bi-credit-card"></i> TRANSACTIONS</span>
                <div class="close" title="Close" onclick="_alertClose();"><i class="bi-x"></i></div>
            </div>
        </div>

        <div class="container-back-div sb-container">
            <div class="inner-div">

                <div id="View_transaction_details">
                    <div class="alert alert-success">
                        <span>TRANSACTION DETAILS</span>
                        <div class="trans-statistics">Transaction ID: <div class="value" id="transaction_id">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Email: <div class="value" id="trans_email">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Payment Purpose: <div class="value" id="transaction_purpose">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Payment Method: <div class="value" id="payment_method">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Wallet Balance Before: <div class="value" id="wallet_balance_before">₦0.00</div><br clear="all" /></div>
                        <div class="trans-statistics">Transaction Amount: <div class="value" id="transaction_amount">₦0.00</div><br clear="all" /></div>
                        <div class="trans-statistics">Wallet Balance After: <div class="value" id="wallet_balance_after">₦0.00</div><br clear="all" /></div>
                        <div class="trans-statistics">Transaction Status: <div class="value" id="transaction_status">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Date: <div class="value" id="date">Xxxx</div><br clear="all" /></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php } ?>





<?php if ($page == 'subcription_form_details') { ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="fly-title-div">
            <div class="in">
                <span id="panel-title"><i class="bi bi-credit-card"></i> SUBCRIPTION</span>
                <div class="close" title="Close" onclick="_alertClose();"><i class="bi-x"></i></div>
            </div>
        </div>

        <div class="container-back-div sb-container">
            <div class="inner-div">

                <div id="View_transaction_details">
                    <div class="alert alert-success">
                        <span>SUBCRIPTION DETAILS</span>
                        <div class="trans-statistics">Subscription ID: <div class="value" id="subscription_id">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Email: <div class="value" id="sub_email">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Department: <div class="value" id="department">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Class: <div class="value" id="class">Xxxx</div><br clear="all" /></div>
                        <div class="trans-statistics">Subscription Date: <div class="value" id="subcription_date">0000-00-00 00:00:00</div><br clear="all" /></div>
                        <div class="trans-statistics">Due Date: <div class="value" id="due_date">0000-00-00 00:00:00</div><br clear="all" /></div>
                        <div class="trans-statistics">Subscription Status: <div class="value" id="subcription_status">Xxxx</div><br clear="all" /></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<?php } ?>


<script type="text/javascript" src="../js/scrollBar.js"></script>
<script type="text/javascript">
    $(".sb-container").scrollBox();
</script>