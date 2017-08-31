<style>
.sidenav #account-access #social-login .col-xs-6 {
    padding: 0;
    text-align: center;
}
.sidenav #account-access #social-login {
    margin-top: 10px;
}
.sidenav #account-access .social-login {
width: 185px;
height: 72px;
}
.sidenav #account-access .signin-sep {
    display: block;
    text-align: center;
    margin: 5px 0 5px 0;
    position: relative;
}
.sidenav #account-access .signin-sep:after {
    background: rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.25);
    box-shadow: 0 1px 0 rgba(255,255,255,0.25);
    display: block;
    content: "";
    height: 1px;
    margin-top: -1px;
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    z-index: 1;
}

.sidenav #account-access .signin-sep--text {
    background: #f0f8ff;
    color: #ccc;
    display: inline-block;
    font-size: 14px;
    padding: 8px;
    position: relative;
    z-index: 2;
}

ul#membership-login-tabs {
    overflow: hidden;
    padding: 0 10px;
    margin-bottom: 0px;
    margin-top: 10px;
   list-style-type: none;
}

li.login-tab {

    color: #000;
    font-weight: bold;
    padding: 15px 10px 16px 10px;
    position: relative;
    z-index: 1;
}
li.tab-item {
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
}
li.login-tab.active-tab-item {
    background: #fff;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    color: #000;
    font-weight: bold;
    padding: 15px 10px 16px 10px;
    position: relative;
    z-index: 1;
	    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
}

form#login-form {
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
</style>

<div class="container-fluid">

<div id="socialmedia-login">
<div id="social-login" class="row">
  <div class="col-xs-6 col-sm-6"><img class="social-login" src="./images/facebook-signin.png" alt="Facebook Login"></div>
  <div class="col-xs-6 col-sm-6"><img class="social-login" src="./images/google-signin.png"  alt="Google Login"></div>
</div>

<div class="signin-sep row">
<span class="signin-sep--text">Or</span>
</div>
</div>

<div id="site-login" class="row">
<ul id="membership-login-tabs" class="tabs">
<li onclick="loginTab()"  id="login-tab"  class="showSingle login-tab tab-item active-tab-item">Sign in</li>
<li onclick="signupTab()" id="signup-tab" class="showSingle login-tab tab-item" >Sign up</li>
</ul>
<form id="login-form">

<div class="site-login" id="membership-signin">

SIGIN HERE
</div>
<div class="site-login" id="membership-signup" style="display:none;">
SIGN UP
</div>
</form>

</div>

<!-- Container END -->
</div>