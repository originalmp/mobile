<!-- start accountAccess.PHP-->
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
<div id="terms-conditions"><center>By creating or logging into an account, you're agreeing with our <a class="no-decoration" href="#">Terms & Conditions</a> and <a class="no-decoration" href="#">Privacy Statement</a>.</center></div>
</div>
<!-- end of Page Footer -->

<!-- END of div class="container-fluid -->
</div>
<!-- end of accountAccess.PHP-->