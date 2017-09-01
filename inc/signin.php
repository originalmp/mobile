<!-- start signin.php-->

<style>
#membership-signin #sigin_button {
    background-color: #07c;
    background-image: none;
    border: 0;
    border-radius: 8px;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 20px;
    font-weight: bold;
    margin: 0 auto 10px;
    outline: 0;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 1px 0 rgba(0,0,0,0.7);
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-appearance: none;
    white-space: normal;
    width: 80%;
}

#membership-signin #no-account {
    text-align: center;
}

#membership-signin .form-label {
    width: 96%;
    color: #383838;
}
#membership-signin .form-input {
    margin-bottom: 10px;
    border: 1px solid #7699c9;
    border-radius: 8px;
    display: block;
    padding: 8px 2%;
    width: 96%;
}
#membership-signin .account-form-group a.link {
    font-size: 12px;
    text-decoration: none;
    font-weight: normal;
}



</style>

<div class="account-form-group">
<label for="username_input" class="form-label">User Name:</label>
<input type="text" class="form-input" name="lo-username" id="member-username" value="" placeholder="Your Username Here" tabindex="1" aria-describedby="lo-username" aria-required="true">
</div>


<div class="account-form-group">
<label for="password_input" class="form-label">
Password
<a class="link" href="#" title="Forgot your password?">Forgot your password?</a>
</label>
<input type="password" value="" name="password" class="form-input" id="member_password">
</div>
<div class="form-group hard-bottom
form-group__show-password
">
<label class="show-password--label">
<input type="checkbox" class="js-show-password--input show-password--input ">
<span class="show-password" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Show password</span>
</label>
</div>
<button id="sigin_button" type="submit" class="bluebutton">Sign in</button>
<p id="no-account" class="">No account? <a class="link" rel="nofollow" title="No account?, Create one here"  onclick="signupTab()" href="#">Create one here</a></p>
<!-- end signin.php-->