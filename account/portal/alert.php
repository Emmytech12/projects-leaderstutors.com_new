
<div class="success-div animated bounceInDown" id="success-div">
    <div><i class="bi-check-all"></i></div> 
    PASSWORD RESET SUCCESSFUL!<br /> 
    <span>Check your email to confirm.</span>
</div>


<div class="success-div animated bounceInDown" id="not-success-div">
    <div><i class="bi-x-circle"></i></div> 
    INVALID LOGIN PARAMETERS!<br /> 
    <span>Please check the login detail.</span>
</div>


<div class="success-div animated bounceInDown" id="warning-div">
    <div><i class="bi-exclamation-circle"></i></div> 
    USER ERROR!<br /> 
    <span>Fill The Fields To Continue</span>
</div>


<div id="get-more-div"></div>

<div id="get-more-div-secondary"></div>






<div class="sidenavdiv">
        <div class="sidenavdiv-in" onclick="_close_side_nav()"> <div class="close-div" onclick="_close_side_nav()">X</div></div>

    <div class="sidenavdiv-menu" id="menu-list-div"> 
        <div class="pro-back-div">
            <div class="img-div" id="side_user_pix"><img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" alt=""></div>
            <div class="detail-div"><span id="side_fullname">Xxxx Xxxx </span> </div>
            <div class="detail-div id"><em><span id="side_user_id">Xxxxxx</span></em> </div>
            <button class="btn" onclick="_get_page_mobile('user_profile','myprofile');"><i class="bi-person"></i> My Profile</button>
        </div>

        <div class="div">
            <li class="active-li" onClick="_get_page_mobile('dashboard','dashboard')" id="mobile-dashboard"><i class="bi-speedometer2"></i> Dashboard</li>
        </div>

        <div class="div">
            <li onClick="_get_page_mobile('exam_category','exam')" id="mobile-exam"> <i class="bi-pencil-square"></i> Exam / Videos</li>
        </div>

        <div class="div">
            <li onClick="_get_page_mobile('subscription','subscriptions')" id="mobile-subscriptions"> <i class="bi-box-arrow-in-up-right"></i> Subcription</li>
        </div>

        <div class="div">
            <li onClick="_get_page_mobile('transactions','transactions')" id="mobile-transactions"> <i class="bi-credit-card"></i> Transactions</li>
        </div>

        <div class="div">
            <li onClick="_get_form('load_user_wallet','load_wallet')" id="mobile-wallet"> <i class="bi bi-wallet2"></i> Load Wallet</li>
        </div>

        <div class="div">
            <li onClick="_get_page_mobile('wallet_history','wallet_history')" id="mobile-wallet_history"> <i class="bi-credit-card"></i> Wallet History</li></li>
        </div>


        <div class="div">
            <li onClick="_get_form('app_settings')"> <i class="bi bi-gear"></i> Settings</li>
        </div>

        <form method="post" action="config/code.php" name="logoutform">
        <div class="div puple">
            <li  onclick="document.getElementById('logoutform').submit();"><i class="bi bi-power"></i> Log-Out</li>
        </div>
            <input type="hidden" name="action" value="logout"/>    
        </form>
        <div class="menu-title" style="height:100px;"> &nbsp;</div>
    </div>
</div>