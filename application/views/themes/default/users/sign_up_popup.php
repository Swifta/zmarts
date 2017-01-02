    <script type="text/javascript">
  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript'; po.async = true;
    po.src = 'https://plus.google.com/js/client:plusone.js';
    var s = document.getElementsByTagName('script')[1];
    s.parentNode.insertBefore(po, s);
  })();
    </script>
    

<div class="shadow_bg"></div>
            <div class="sign_up_outer">  	                        
                    <div class="sign_up_logo">
                        <a href="<?php echo PATH;?>"><img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH;?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/></a>
                        <a class="close2 close" title="<?php echo $this->Lang['CLOSE']; ?>" id="close1"></a>
                    </div>				
                <div class="signup_content new_user_signup clearfix">
                    <div class="signup_form_block">
                        
                        
                        <form class="user_details"  name="signup" method="post"  onsubmit="return validatesignup();" action="<?php echo PATH; ?>users/signup">
                        <h2 class="signup_title">User Registration</h2>
                            <ul>                               
                            <li>
                                <label><?php echo $this->Lang["NAME"]; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                   <input tabindex="1" name="f_name" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" autofocus />
                                   <em id="fname_error"></em>
                                </div>   
                            </li>
                             <li>
                                <label><?php echo $this->Lang['AGE_RNG']; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
									<select name="age_range" tabindex="4">
										<option value=""><?php echo $this->Lang['SEL_AGE_RNG']; ?></option>
										<option value="1" ><?php echo $this->Lang["17_BEL"]; ?></option>
										<option value="2"><?php echo $this->Lang["18_25"]; ?></option>
										<option value="3"><?php echo $this->Lang["26_35"]; ?></option>
										<option value="4"><?php echo $this->Lang["36_45"]; ?></option>
										<option value="5"><?php echo $this->Lang["46_65"]; ?></option>
										<option value="6"><?php echo $this->Lang["66_ABV"]; ?></option>
									</select>
                                  <em id="age_range_error"></em>
                                </div>   
                            </li>
                            <li>
                                <label><?php echo $this->Lang['EMAIL']; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                  <input onChange="is_salary_acc_domain(this.value)" name="email" id="email" tabindex="2" type="text" maxlength="64" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="" />
                                  <em id="emai_error"></em>
                                  
                                </div>   
                            </li>
                            <li>
                                <label><?php echo $this->Lang['PSWD'];?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <input tabindex="5" name="password" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_PASS']; ?>" type="password" value="" />
                                    <em id="pass_error"></em>
                                </div>   
                            </li>
                            <li>
                                <label>Confirm your email:<span class="form_star">*</span></label>
                                <div class="fullname">
                                  <input tabindex="3" name="email_confirm" type="text" maxlength="64" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="" />
                                  <em id="email_confirm_error"></em>
                                </div>   
                            </li>
                            <li>
                                <label><?php echo $this->Lang['CPSWD'];?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <input tabindex="6" name="cpassword" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_CPASS']; ?>" type="password" value="" />
                                    <em id="cpass_error"></em>
                                </div>   
                            </li>
                            <li class="error_double">
                                <label>Zenith Bank Account Number:<!--<span class="form_star">*</span>--></label>
                                <div class="fullname">
                                    <input name="nuban" tabindex="7" maxlength="10" placeholder="Please enter your account no." type="text" value="" />
                                    <em id="acc_error"></em>
                                    <label id="id_lb_prime" style="font-size: 14px;
color: #39EF0C; width:84%; display:block;"></label>
                                    
                                </div>  
                                 
                            </li>

                            <li>
                                <label>Country:<span class="form_star">*</span></label>
                                <div class="fullname">
                                	<input tabindex="8" type="text" id="id_rush_country">
                                    <input type="hidden" name="country" value="25" id="id_rush_country">
                                    
                                    <!--<select name="country" id="id_rush_country" onchange="return city_change_merchant(this.value);">
                                           
                                           <?php foreach ($this->all_country_list as $c) { ?>
                                             <option  title="<?php echo $c->country_name; ?>" value="<?php echo $c->country_id; ?>" ><?php echo $c->country_name; ?></option>
                                            <?php } ?>
                                    </select>-->
                                     <em id="country_error"></em>
                                </div>
                            </li>
                            <li>
                                <label>Select a State:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <div id="CitySD_log_Signup">
                                      <select tabindex="9" name="city" id="id_rush_sel_state" >
                                          
                                    </select>
                                    </div>
                                     <em id="city_error"></em>
                                </div>
                           </li>
                           <input type="hidden" name="unique_identifier" value="0000000000" />
			    <!--<li>
                                <label><?php echo $this->Lang['UNIQ_IDEN'];?>:<span class="form_star"></span></label>
                                <div class="fullname">
                                    <input name="unique_identifier" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_UNIQ_IDEN']; ?>" type="text" value="" />
                                </div>   
                                <label></label>
                            </li>-->
                             <li>
                                <label><?php echo $this->Lang['GENDER']; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
									 <select tabindex="9" name="gender">
										<option value=""><?php echo $this->Lang["SEL_GEN"]; ?></option>
										<option value="1"><?php echo $this->Lang["MALE"]; ?></option>
										<option value="2"><?php echo $this->Lang["FEMALE"]; ?></option>
									 </select>
                                  <em id="gender_error"></em>
                                </div>   
                            </li>
                            
                           <li class="check_box">
                                <p><input tabindex="10" type="checkbox" name="terms" id="termsquantity" value="terms"><?php echo $this->Lang['BY_CLICKING_SUBMIT']; ?> 									
                                <a class="forget_link" target="_blank" title="<?php echo $this->Lang['TEMRS']; ?>" href="<?php echo PATH; ?>Disclaimer.php"><?php echo $this->Lang['TEMRS']; ?></a>									
                                </p>
                                <em id="terms_error"></em>
                            </li>
                            <li>                                  
                                <input tabindex="11" class="sign_submit" type="submit" title="Sign Up" value="Sign Up" /> 
                                <input id = "id_z_offer_click_status_signup" type="hidden" value="0"/>
                            </li>
                            </ul>
                        </form>
                        
                        
                    </div>
                    <div  class="signup_social_block user_details">                        
                        <p><?php echo $this->Lang['SIGN_IN_WITH']; ?>..</p>
                        <a class="f_connect" onclick="facebookconnect();" title="<?php echo $this->Lang['FB_CONN']; ?>">&nbsp;</a>
<br />
    <button class="g-signin g_connect" 
            data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
            data-requestvisibleactions="http://schemas.google.com/AddActivity"
            data-clientId="997154646959-uttoqigl36r6gpg5a4eht2tn9jru7taq.apps.googleusercontent.com"
            data-accesstype="offline"
            data-callback="signinCallback"
            data-theme="dark"
            data-cookiepolicy="single_host_origin">
    </button>
<!--<button class="g-signin g_connect"
        data-scope="https://www.googleapis.com/auth/plus.login"
        data-clientid="997154646959-uttoqigl36r6gpg5a4eht2tn9jru7taq.apps.googleusercontent.com"
        data-callback="signinCallback"
        data-theme="dark"
        data-cookiepolicy="single_host_origin"
        data-requestvisibleactions="http://schemas.google.com/AddActivity"
        data-width="wide">Hello
    </button>--><br />
                       <!-- <a class="t_connect" onclick="connectTwitter();" title="<?php echo $this->Lang['TWITTER_CONN']; ?>">&nbsp;</a> -->                       
                        <p><?php echo $this->Lang['ALREADY_A_MEMBER']; ?> <a class="forget_link" title="<?php echo $this->Lang['SIGN_IN']; ?> " href="javascript:showlogin();"><?php echo $this->Lang['SIGN_IN']; ?> </a> </p>                                                   
                    </div>
                    <div class="signup_social_block account_otp" style="display:none">     
                    <form>
                    <h2 class="signup_title">Salary Account OTP Verification</h2>
                    <p class="signup_title">Please enter below the OTP that has been sent to your email account.</p>
                    <em id="err_otp"></em>
                    
                    <div class="fullname" >
                    <input type="text" name="otp" class="otp" placeholder="Enter OTP sent to email" style="width:230px;" />
                    
                    </div>
                    <div class="fullname" style="margin-top:5px">
                    <input style="width: 247px" onClick="otp_verification();" type="button" value="Verify" class="sign_submit"/>
                    </div>
                    <div class="fullname" style="margin-top:5px;">
                    <input onClick="cancel_otp_verification();" style="width: 247px; background-color:#CCC;  box-shadow: none;" type="button" value="Cancel" class="sign_submit"/>
                    </div>
                    </form>                   
                                                                      
                    </div>
                    
                </div>                          
            </div>
              

<script type="text/javascript">
    
    function connectTwitter(){
        var url = "<?php echo PATH."twitter-connect.php"; ?>"
        //window.open(url, '_blank', 'width=900, height=500');
        location.href = url;
        return false;
    }
    
$(document).ready(function(){
$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 				   		   
//Close Popups and Fade Layer
$('#close1').live('click', function() {
		$('.popup_block1').css({'display' : 'none'});
		
		$('#fade').css({'visibility' : 'hidden'});
			//  location.reload();
	
	return false;
});
	$(document).keyup(function(e) { 
        if (e.keyCode == 27) { // esc keycode
        	$('.popup_block1').css({'display' : 'none'});
			$('#fade').css({'visibility' : 'hidden'});
	  	
		
		return false;
        }
    });
});

var token;
var full_name;
var gpclass = (function(){

//Defining Class Variables here
var response = undefined;
return {
        //Class functions / Objects

        mycoddeSignIn:function(response){
                // The user is signed in
                if (response['access_token']) {
                    token = response['access_token'];
                        //Get User Info from Google Plus API
                        gapi.client.load('plus','v1',this.getUserInformation);

                } else if (response['error']) {
                        // There was an error, which means the user is not signed in.
                        //alert('There was an error: ' + authResult['error']);
                }
        },

        getUserInformation: function(){
                var request = gapi.client.plus.people.get( {'userId' : 'me'} );
                request.execute( function(profile) {
                        var email = profile['emails'].filter(function(v) {
                                return v.type === 'account'; // Filter out the primary email
                        })[0].value;
                        var fName = profile.displayName;
                        //alert(fName);
                        //alert(email);
                        disconnectUser();
                        location.href='<?php echo PATH; ?>google-connect.php?full_name='+fName+'&email='+email
                        //$("#inputFullname").val(fName);
//                        /$("#inputEmail").val(email);
                        
                });
        }

}; //End of Return
})();

function signinCallback(gpSignInResponse) {
    gpclass.mycoddeSignIn(gpSignInResponse);
//  if (authResult['access_token']) {
//    // Successfully authorized
//    token = authResult['access_token'];
//    //gapi.client.setApiKey('997154646959-uttoqigl36r6gpg5a4eht2tn9jru7taq.apps.googleusercontent.com'); //set your API KEY
//    //gapi.client.load('plus', 'v1',function(){});//Load Google + API
//
//   alert("here");
//    //then redirect to URL
//    //location.href='/ecommerce/google-connect.php?full_name='+fullName+'&email=';
//    //document.getElementById('signinButton').setAttribute('style', 'display: none');
//
//  } else if (authResult['error']) {
//    // There was an error.
//    // Possible error codes:
//    //   "access_denied" - User denied access to your app
//    //   "immediate_failed" - Could not automatially log in the user
//    // console.log('There was an error: ' + authResult['error']);
//    alert("Failed");
//  }
}

function disconnectUser() {
  var revokeUrl = 'https://accounts.google.com/o/oauth2/revoke?token=' +
      token;

  // Perform an asynchronous GET request.
  $.ajax({
    type: 'GET',
    url: revokeUrl,
    async: false,
    contentType: "application/json",
    dataType: 'jsonp',
    success: function(nullResponse) {
      // Do something now that user is disconnected
      // The response is always undefined.
    },
    error: function(e) {
      // Handle the error
      // console.log(e);
      // You could point users to manually disconnect if unsuccessful
      // https://plus.google.com/apps
    }
  });
}


function validatesignup()
{ try{
	
	
	
	/*
		Modification of ndot signup 
		to handle club membership conditioning.
		@Live
	*/
	/*var fname = document.signup.f_name.value;	
	var email = document.signup.email.value;	
	var password = document.signup.password.value;
	var cpassword = document.signup.cpassword.value;
	var city = document.signup.city.value;
	var country = document.signup.country.value;
	var terms = document.getElementById('termsquantity').checked;*/
	
	$('em').text('');
	
	var fname = document.signup.f_name.value;	
	var email = document.signup.email.value;
        var email_confirm = document.signup.email_confirm.value;
	var password = document.signup.password.value;
	var cpassword = document.signup.cpassword.value;
	var city = document.signup.city.value;
	var country = document.signup.country.value;
	var terms = document.getElementById('termsquantity').checked;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var gender = document.signup.gender.value;	
	var age_range = document.signup.age_range.value;
	
	
	
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var unique_identifier = document.signup.unique_identifier.value;
	var z_offer = $('#id_z_offer_click_status_signup').val();
	
	
	
	
	if(fname == '' || email =='' || password == '' || cpassword == ''|| 
                terms == 'false' || (atpos<1 || dotpos<atpos+2 || 
                dotpos+2>=email.length) || city == '-99'|| city == ''
                || email_confirm == '' || gender == '' || age_range == '')
	{
		if(gender == ''){
			$('#gender_error').html("Please confirm your gender");
		}
		else {
			$('#gender_error').html('');
		}
		if(age_range == ''){
			$('#age_range_error').html("Please confirm your age range");
		}
		else {
			$('#age_range_error').html('');
		}
            
		if(fname == ''){
			$('#fname_error').html("<?php echo $this->Lang['PLS_ENT_NAM']; ?>");
		}
		else {
			$('#fname_error').html('');
		}
		if(password == '')
		{
			$('#pass_error').html("<?php echo $this->Lang['PLS_ENT_PASS']; ?>");
		}
		else {
			$('#pass_error').html('');
		}
		if(cpassword == '')
		{
			$('#cpass_error').html("<?php echo $this->Lang['PLS_ENT_CPASS']; ?>");
		}
		else {
			$('#cpass_error').html('');
		}
                
		if(email_confirm == '')
		{
			$('#email_confirm_error').html("Please confirm your email");
		}
		else {
			$('#email_confirm_error').html('');
		}
		
		if(country == '-99'){
			$('#country_error').html("<?php echo $this->Lang['PLS_SEL_COUNTRY']; ?>");
		
		}
		else {
			$('#country_error').html('');
		}
		
		if(city == '-99' || city == ''){
			$('#city_error').html("Please confirm your state");
		
		}
		else {
			$('#city_error').html('');
		}
		
		if ( document.getElementById('termsquantity').checked == false )  {
		        $('#terms_error').html("<?php echo $this->Lang['PLEASE_SELECT_TERMS']; ?>");
                }

		if(email == '') {
			$('#emai_error').html("<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>");
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		{
			$('#emai_error').html("<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>");
			document.signup.email.value = '';
			document.signup.password.value = '';
		}
		else {
			$('#emai_error').html('');
		}
		
		return false;
		
	}
	else{
		if (email != email_confirm) {
                        //document.signup.email.value = "";
                        //document.signup.email_confirm.value = "";
                        $('#country_error').html('');
                        $('#emai_error').html('');
                        $('#city_error').html('');
                        $('#pass_error').html('');
                        $('#fname_error').html('');
                        $('#email_confirm_error').html("Email address does not Match");
                        return false;
                 }
                else {
                    $('#email_confirm_error').html('');    
					        
                }
                
		if (password != cpassword) {
                        document.signup.password.value = "";
                        document.signup.cpassword.value = "";
                        $('#country_error').html('');
                        $('#emai_error').html('');
                        $('#city_error').html('');
                        $('#pass_error').html('');
                        $('#fname_error').html('');
                        $('#cpass_error').html("<?php echo $this->Lang['PCPM']; ?>");
                        return false;
                 }
                else {
                    $('#cpass_error').html('');
                    
                }
                
                
                if ( document.getElementById('termsquantity').checked == false )  {
		        $('#terms_error').html("<?php echo $this->Lang['PLEASE_SELECT_TERMS']; ?>");
		        return false;
                }
				
				
				
				
		var url= Path+'users/check_user_signup/?email='+email+'&z_offer='+z_offer;
		$.post(url,function(check){
			
			if(check === -1){
				$('#emai_error').html("Email already used for registration. login or enter a unique email account.");
				
				document.signup.email.value = '';
				document.signup.password.value = '';
				$('#city_error').html('');
				return false;
			}
			else if(check === -999){
                            //email_confirm
					javascript:signup_after_zenith_offer_click(fname, email, password,cpassword, gender, age_range, country, city, terms, z_offer, unique_identifier);
					return false;
					
			}
			
			if(!new_zenith_prime_membership(($('.error_double input').val()))){
			   return false;
			}
		});
	}
	return false;
		
	/*var fname = document.signup.f_name.value;	
	var email = document.signup.email.value;	
	var password = document.signup.password.value;
	var cpassword = document.signup.cpassword.value;
	var city = document.signup.city.value;
	var country = document.signup.country.value;
	var terms = document.getElementById('termsquantity').checked;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var gender = document.signup.gender.value;	
	var age_range = document.signup.age_range.value;	
	
	if(fname == '' || email =='' || password == '' || cpassword == ''|| terms == 'false' || (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) || city == '-99'|| city == '' || gender =='' || age_range=='')
	{
		if(fname == ''){
			$('#fname_error').html("<?php echo $this->Lang['PLS_ENT_NAM']; ?>");
		}
		else {
			$('#fname_error').html('');
		}
		if(password == '')
		{
			$('#pass_error').html("<?php echo $this->Lang['PLS_ENT_PASS']; ?>");
		}
		else {
			$('#pass_error').html('');
		}
		if(cpassword == '')
		{
			$('#cpass_error').html("<?php echo $this->Lang['PLS_ENT_CPASS']; ?>");
		}
		else {
			$('#cpass_error').html('');
		}
		
		if(country == '-99'){
			$('#country_error').html("<?php echo $this->Lang['PLS_SEL_COUNTRY']; ?>");
		
		}
		else {
			$('#country_error').html('');
		}
		
		if(city == '-99'){
			$('#city_error').html("<?php echo $this->Lang['PLS_SEL_COUNTRY_FIR']; ?>");
		
		}
		else {
			$('#city_error').html('');
		}
		if(city == ' '){
			$('#city_error').html("<?php echo $this->Lang['PLS_SEL_COUNTRY_FIR']; ?>");
		
		}
		else {
			$('#city_error').html('');
		}
		
		if ( document.getElementById('termsquantity').checked == false )  {
		        $('#terms_error').html("<?php echo $this->Lang['PLEASE_SELECT_TERMS']; ?>");
                }

		if(email == '') {
			$('#emai_error').html("<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>");
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		{
			$('#emai_error').html("<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>");
			document.signup.email.value = '';
			document.signup.password.value = '';
		}
		else {
			$('#emai_error').html('');
		}
		if(gender == ''){
			$('#gender_error').html("<?php echo $this->Lang['PLS_ENT_NAM']; ?>");
		}
		else {
			$('#gender_error').html('');
		}
		if(age_range == ''){
			$('#age_range_error').html("<?php echo $this->Lang['PLS_ENT_NAM']; ?>");
		}
		else {
			$('#age_range_error').html('');
		}
		
		return false;
		
	}
	else{
		
		if (password != cpassword) {
                        document.signup.password.value = "";
                        document.signup.cpassword.value = "";
                        $('#country_error').html('');
                        $('#emai_error').html('');
                        $('#city_error').html('');
                        $('#pass_error').html('');
                        $('#fname_error').html('');
						$('#gender_error').html('');
						$('#age_range_error').html('');
                        $('#cpass_error').html("<?php echo $this->Lang['PCPM']; ?>");
                        return false;
                 }
                else {
                    $('#cpass_error').html('');
                    
                }
                
                if ( document.getElementById('termsquantity').checked == false )  {
		        $('#terms_error').html("<?php echo $this->Lang['PLEASE_SELECT_TERMS']; ?>");
		        return false;
                }
		var url= Path+'users/check_user_signup/?email='+email;
		$.post(url,function(check){
			if(check == -1){
				$('#emai_error').html("<?php echo $this->Lang['EMAIL_EXIST']; ?>");
				
				document.signup.email.value = '';
				document.signup.password.value = '';
				$('#city_error').html('');
				return false;
			}
			
			document.signup.submit();
		});
	}
	return false;*/
  }catch(e){
	  console.log(e);
	  return false;
  }
	
}

</script> 

<script type="application/javascript">
	$(document).ready(function(e) {
        $('#id_rush_country').val("Nigeria").attr('readonly', 'readonly');
		city_change_merchant("25");
		$('#id_rush_sel_state').val("-99");
    });
	
	
  
</script>

<script>
 
  function validateAcc(val){
	 
	 var $errorField = $('#acc_error');
	 console.log($errorField.length);
	 $errorField.text("");
	 $('.error_double em').text('');
	 console.log($('.error_double em').length);
	 
	 
	 if(val === ""){
		$errorField.text("");
		document.signup.submit();
	 	return true;
	 }
	 
	 val = $.trim(val);
	 if(val === null){
		$errorField.text('');
		document.signup.submit();
	 	return true;
	 }
	 
	  if(!isValidNumber(val)){
		$errorField.text('Account number should contain only digits [ i.e. 0-9 ].');
	 	return false;
	 }
	 
	 if(val.length !== 10){
		$errorField.text('Account number should be 10 digits.');
	 	return false;
	 }
		
	console.log("Acc: ", val);
	 var data = {nuban:val};
	 var url = "<?php echo PATH?>users/merchant_registration_validation";
	 
	 
	 $post = $.ajax(
	 {
		  type:'POST',
		  url:url,
		  data:{nuban:val},
		  success: function(response)
		 {
			 console.log("data: ", response);
			 if(response === "1"){
				 $errorField.text('');
				 document.signup.submit();
				 return true;
				 
			 } else {
				console.log("Error: ", "Could not verify acc. no.");
				$errorField.text('Could not verify acc. no.');
				return false;
			 }
		 },
		 error: function(response) 
		 {
			 console.log("Errorx3: ", "Fatal error occured.");
			 $errorField.text('Error occured. Could not verify acc. no. Please try again');
			 return false;
		 }
		 
		 	
	});
	
	console.log(typeof $post);
 }
 
  function isValidNumber(val){
	  var reg = /^\d+$/;
	  return reg.test(val);
  }
  
  function new_zenith_prime_membership(val){
	 
	 var $errorField = $('#acc_error');
	 console.log($errorField.length);
	 $errorField.text("");
	 $('.error_double em').text('');
	 console.log($('.error_double em').length);
	 
	 if(val === ""){
		$errorField.text("");
		is_email_unique($('#email').val());
	 	return false;
	 }
	 
	 val = $.trim(val);
	 if(val === null){
		$errorField.text('');
		is_email_unique($('#email').val());
	 	return false;
	 }
	 
	  if(!isValidNumber(val)){
		$errorField.text('Account number should contain only digits [ i.e. 0-9 ].');
	 	return false;
	 }
	 
	 if(val.length !== 10){
		$errorField.text('Account number should be 10 digits.');
	 	return false;
	 }
		
	email = $('#email').val();
	console.log("Acc: ", val);
	console.log("Email: ", email);
	 var data = {nuban:val};
	 var url = "<?php echo PATH?>users/validate_customer_salary_account/"+val+"/"+email;
	 
	 
	 $post = $.ajax(
	 {
		  type:'POST',
		  url:url,
		  data:{nuban:val},
		  success: function(response)
		 {
			 console.log("data: ", response);
			 /*
			 	if data is 1, activate OTP verification form.
				else if data is -2, call validateAcc to proceed with normal registration.
				else return false for other zenith bank account types verification to be verified.
			 */
			 
			 if(response == "1"){
			 	$(".user_details").css("display","none");
			 	$(".account_otp").css("display","block");
				return true;
			 }else{
				 if(response == "-2"){
					 validateAcc($('.error_double input').val());
					 return true;
				 }
				 
				 if(response == "-4"){
					 $('#emai_error').text('Email address already in use on the platform. Enter a unique one or login if already registered.');
				 }else{
				 	$errorField.text("Could not verify salary account.");
				 }
				 return false;
			 }
			
				
			
		 },
		 error: function(response) 
		 {
			 console.log("Errorx1: ", "Fatal error occured.");
			 $errorField.text('Error occured. Could not verify salary acc. no. Please try again');
			 return false;
		 }
		 
		 	
	});
	
 }
 
 function cancel_otp_verification(){
	 var url = "<?php echo PATH?>users/cancel_account_otp_verification";
	  $errorField = $('#err_otp');
	  $errorField.text("");
	 $post = $.ajax(
	 {
		  type:'POST',
		  url:url,
		  success: function(response)
		 {
			 console.log("cancel otp data: ", response);
			 $(".user_details").css("display","block");
			 $(".account_otp").css("display","none");
		 },
		 error: function(response) 
		 {
			 console.log("Errorx4: ", "Fatal error occured.");
			 $errorField.text('Error occured. Could not verify acc. no. Please try again');
			 return false;
		 }
		 
		 	
	});
 }
 
 function otp_verification(){
	 var otp = $('.otp').val();
	 $errorField = $('#err_otp');
	 if(otp == null || $.trim(otp) == ""){
		 $errorField.text("Please enter OTP");
		 return false;
	 }
	 	
	 var url = "<?php echo PATH?>users/account_otp_verification/"+otp;
	 
	  $errorField.text("");
	 $post = $.ajax(
	 {
		  type:'POST',
		  url:url,
		  success: function(response)
		 {
			 /*
			 	if response is 1, call validateAcc.
				else show error to user;
			 */
			 console.log("otp verification data: ", response);
			if(response == "1"){
			 	validateAcc($('.error_double input').val());
				 $(".user_details").css("display","block");
			 	 $(".account_otp").css("display","none");
			}else{
				 $errorField.text('OTP could not be verified. Review and try again. Or cancel and submit form for new OTP to be sent to email.');
				 
			}
		 },
		 error: function(response) 
		 {
			 console.log("Errorx5: ", "Fatal error occured.");
			 $errorField.text('Error occured. Could not verify acc. no. Please try again');
			 return false;
		 }
		 
		 	
	});
 }
 
  function is_email_unique(email){
	
	 $errorField = $('#emai_error');
	 if(email == null || $.trim(email) == ""){
		 $errorField.text("Please your email account");
		 return false;
	 }
	 	
	 var url = "<?php echo PATH?>users/email_available/"+email+"/true";
	 
	  $errorField.text("");
	 $post = $.ajax(
	 {
		  type:'POST',
		  url:url,
		  
		  success: function(response)
		 {
			 /*
			 	if response is 1, call validateAcc.
				else show error to user;
			 */
			 console.log("Email availability data: ", response);
			if(response == "1"){
			 	validateAcc($('.error_double input').val());
			}else{
				 $errorField.text('Email address already in use on the platform. Enter a unique one or login if already registered.');
				 return false;
				 
			}
		 },
		 error: function(response) 
		 {
			 console.log("Errorx2: ", "Fatal error occured.");
			 $errorField.text('Error occured. Could not validate email address. Please try again');
			 return false;
		 }
		 
		 	
	});
 }
 
  function is_salary_acc_domain(email){
	
	 $primeLable = $('#id_lb_prime');
	 $primeLable.text("");
	 if(email == null || $.trim(email) == ""){
		 $errorField = $('#emai_error');
		 return false;
	 }
	 	
	 var url = "<?php echo PATH?>users/check_club_membership_domain/"+email+"/true";
	 $post = $.ajax(
	 {
		  type:'POST',
		  url:url,
		  
		  success: function(response)
		 {
			
			 console.log("Email domain availability data: ", response);
			if(response == "1"){
			 	$primeLable.text("Eligible for prime membership with your salary account.");
			}else{
				 $primeLable.text("");
				 return false;
				 
			}
		 },
		 error: function(response) 
		 {
			 console.log("Errorx2: ", "Fatal error occured.");
			 return false;
		 }
		 
		 	
	});
 }
  
  
 
</script>

