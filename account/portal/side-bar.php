<div class="side-back-div animated fadeIn" id="menu-list-div">
    <div class="div-in">
        <div class="logo-div"><img src="all-images/images/logo.png" alt="<?php echo $thename?> logo" /></div>
        <br clear="all"/>
        <br clear="all"/>
            <div class="side-link">
                <li class="active-li"  onClick="_get_page('dashboard','dashboard')" id="dashboard"><i class="bi-speedometer2"></i> Dashboard</li>
                <li onClick="_get_page('exam_category','exam')" id="exam"><i class="bi-pencil-square"></i> Class / Videos</li>
                <li onClick="_get_page('exam_category','exam')" id="exam"><i class="bi-pencil-square"></i> Courses</li>
                <li onClick="_get_page('subscription','subscriptions')" id="subscriptions"><i class="bi-box-arrow-in-up-right"></i> Subcription</li>
                <li onClick="_get_page('transactions','transactions')" id="transactions"><i class="bi-credit-card"></i> Transactions</li>
                <li onClick="_get_page('wallet_history','wallet_history')" id="wallet_history"><i class="bi-credit-card"></i> Wallet History</li>
            </div>
    </div>

    <div class="div-in side-bottom">
        <div class="side-link">
            <li onClick="_get_form('app_settings')"><i class="bi bi-gear"></i> Settings</li>
            <form method="post" action="config/code" id="logoutform">
            <input type="hidden" name="action" value="logout"/>
            <li onclick="document.getElementById('logoutform').submit();"><i class="bi bi-power"></i> Log-Out</li>
            </form>
        </div>
    </div>
</div>





