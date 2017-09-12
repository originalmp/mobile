<!-- start accountAccess.PHP-->

<style>
/* My Account - Banner Area, inc/accountAccess.php  */
#account-access #members-advertising #header-banner {
    overflow: hidden;
    padding: 0;
}
/* My Account - Header Advertising - Image, inc/accountAccess.php  */
#account-access #members-advertising #header-banner .banner {
    width: 130%;
}
/* My Account - Header Advertising bottom Space, inc/accountAccess.php  */
#account-access #members-advertising {
    padding: 10px;
}
/* My Account - Members Form Area, inc/accountAccess.php  */
#account-access form#login-form {
    -ms-border-radius: 0;
    -webkit-border-radius: 0;
    -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    background: #fff;
    border-radius: 0;
    border: 0;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    display: block;
    margin: 0 10px 10px 10px;
    overflow: hidden;
    position: relative;
    padding: 10px;
    z-index: 1;
}
/* My Account - Form Tabs, inc/accountAccess.php */
#account-access ul#membership-login-tabs {
    overflow: hidden;
    padding: 0 10px;
    margin-bottom: 0px;
    margin-top: 10px;
   list-style-type: none;
}
/* , inc/accountAccess.php */
#account-access li.tab-item {
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 14px;
    line-height: 16px;
    margin: 0;
    float: left;
    position: relative;
    top: 1px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.25);
    text-decoration: none;
    width: 50%;
    color: #07c;
    font-weight: bold;
    padding: 15px 10px 16px 10px;
    z-index: 1;
}
/* , inc/accountAccess.php */
#account-access li.login-tab.active-tab-item {
    background: #fff;
    color: #000 !important;
    font-weight: bold;
    padding: 15px 10px 16px 10px;
    position: relative;
    z-index: 1;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
}
/* My Account - Terms and Conditions, inc/accountAccess.php */ */
#terms-conditions {
    text-align: center;
    font-size: 12px;
    margin: 10px;
    padding: 8px 5px;
    border-radius: 3px;
    line-height: 16px;
    text-decoration: none !important;
}
/* , inc/signup.php */
/*, inc/signin.php */
.account-form-group {
    margin-bottom: 10px;
}

</style>
<div class="container-fluid">

<!-- Page Header -->
<div id="account-access-header">
<div id="members-advertising" class="row">
  <div id="header-banner" class="col-xs-12 col-sm-12">
    <?php include './inc/banner/myaccount-header.php'; ?>
  </div><!-- end of div id="header-banner" class="col-xs-12 col-sm-12" -->
</div><!-- end of div id="members-advertising" class="row" -->
</div><!-- end of div id="account-access-header" -->


<div id="site-login" class="row">
<!-- tabs -->
<ul id="membership-login-tabs" class="tabs">
<li onclick="loginTab()"  id="login-tab"  class="login-tab tab-item active-tab-item">Sign in</li>
<li onclick="signupTab()" id="signup-tab" class="login-tab tab-item" >Sign up</li>
</ul><!-- end of Tabs -->

<!-- Form Start -->
<form id="login-form">
<!-- Tab 1 -->
<div class="site-login" id="membership-signin">
    <?php include './inc/signin.php'; ?>
</div>
<!-- TAB 2 -->
<div class="site-login" id="membership-signup" style="display:none;">
    <?php include './inc/signup.php'; ?>
</div>

</form>
<!-- Form end -->
</div><!-- end of div id="site-login" class="row" -->
<!-- Page Footer -->
<div class="row">
<div id="terms-conditions">By creating or logging into an account, you're agreeing with our <a class="no-decoration" href="#">Terms & Conditions</a> and <a class="no-decoration" href="#">Privacy Statement</a>.</div>
</div>
<!-- end of Page Footer -->

<!-- END of div class="container-fluid -->
</div>
<!-- end of accountAccess.PHP-->