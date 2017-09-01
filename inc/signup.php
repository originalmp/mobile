<style>
#membership-signup .form-label {
    width: 96%;
    color: #383838;
}
#membership-signup .form-input {
    margin-bottom: 10px;
    border: 1px solid #7699c9;
    border-radius: 8px;
    display: block;
    padding: 8px 2%;
    width: 96%;
}
</style>

<div class="account-form-group">
<label for="ca-username" class="form-label">User Name* :</label>
<input type="text" class="form-input" name="ca-username" id="ca-username" placeholder="Your name" tabindex="1" aria-describedby="ca-username" aria-required="true">
</div>

<div class="account-form-group">
<label for="ca-email" class="form-label">Email Address* :</label>
<input type="text" class="form-input" name="ca-email" id="ca-email" placeholder="Your email address" tabindex="2" aria-describedby="ca-email" aria-required="true">
</div>

<div class="account-form-group">
<label for="ca-password" class="form-label">Password* :</label>
<input type="password" class="form-input" name="ca-password" id="ca-password" placeholder="Please enter your password" tabindex="3" aria-describedby="ca-password" aria-required="true">
</div>

<div class="account-form-group">
<strong><label for="ca-acct-type">Type of Account* :</label></strong>
<select id='account-type'>
<option value="0">Regular Customer</option>
<option value="1">Reseller Account</option>
<option value="2">Business Account</option>
<option value="3">Public Sector</option>
</select>
</div>

<!-- FORM PAGE 1 -->
<div id="regular-customer" style=" text-transform: capitalize;"><center>Regular Customer Selected</center>
<button id="next_button" type="submit" class="bluebutton">Continue</button>

</div>
<div id="reseller-account" style=" text-transform: capitalize;display:none;"><center>Reseller Account Selected</center>
<button id="next_button" type="submit" class="bluebutton">Continue</button></div>
<div id="business-account" style=" text-transform: capitalize;display:none; "><center> Business Account Selected</center>
<button id="next_button" type="submit" class="bluebutton">Continue</button></div>
<div id="public-sector" style=" text-transform: capitalize;display:none; "><center>Public Sector Selected</center>
<button id="next_button" type="submit" class="bluebutton">Continue</button> </div>

<!--
< !-- FORM PAGE 2 - Name & Phone -- >
<div id="regular-customer" style=" text-transform: capitalize; visibility: hidden;">Regular Customer</div>
<div id="reseller-account" style=" text-transform: capitalize; visibility: hidden;">Reseller Account </div>
<div id="business-account" style=" text-transform: capitalize; visibility: hidden;"> Business Account</div>
<div id="public-sector" style=" text-transform: capitalize; visibility: hidden;">Public Sector </div>

< !-- FORM PAGE 3 Address -- >
<div id="regular-customer" style=" text-transform: capitalize; visibility: hidden;">Regular Customer</div>
<div id="reseller-account" style=" text-transform: capitalize; visibility: hidden;">Reseller Account </div>
<div id="business-account" style=" text-transform: capitalize; visibility: hidden;"> Business Account</div>
<div id="public-sector" style=" text-transform: capitalize; visibility: hidden;">Public Sector </div>

<!-- FORM PAGE 4 Opt in for membership exclusive eblasts, special discounts, and the latest tech news  -- >
-->


<script>
$(document).ready(function(){
        $("#account-type").change(function(){
            $( "#account-type option:selected").each(function(){
                if($(this).attr("value")=="3"){
                    $("#regular-customer, #business-account, #reseller-account").hide();
                    $("#public-sector").show();
                }
                if($(this).attr("value")=="2"){
                    $("#regular-customer, #reseller-account, #public-sector").hide();
                    $("#business-account").show();
                }
                if($(this).attr("value")=="1"){
                    $("#regular-customer, #business-account, #public-sector").hide();
                    $("#reseller-account").show();
                }
                if($(this).attr("value")=="0"){
                    $("#reseller-account, #business-account, #public-sector").hide();
                    $("#regular-customer").show(); 
                }
            });
        }).change();
    });
</script>
