    <script type="text/javascript">
  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript'; po.async = true;
    po.src = 'https://plus.google.com/js/client:plusone.js';
    var s = document.getElementsByTagName('script')[0];
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
                        <h2 class="signup_title"><?php echo $this->Lang['USER_SIGN_UP']; ?></h2>
                        <form name="signup" method="post"  onsubmit="return validatesignup();" action="<?php echo PATH; ?>users/signup">
                            <ul>                               
                            <li>
                                <label><?php echo $this->Lang["NAME"]; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                   <input name="f_name" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" autofocus />
                                   <em id="fname_error"></em>
                                </div>   
                            </li>
                             <li>
                                <label><?php echo $this->Lang['AGE_RNG']; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
									<select name="age_range">
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
                                  <input name="email" type="text" maxlength="64" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="" />
                                  <em id="emai_error"></em>
                                </div>   
                            </li>
                            <li>
                                <label><?php echo $this->Lang['PSWD'];?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <input name="password" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_PASS']; ?>" type="password" value="" />
                                    <em id="pass_error"></em>
                                </div>   
                            </li>
                            <li>
                                <label>Confirm your email:<span class="form_star">*</span></label>
                                <div class="fullname">
                                  <input name="email_confirm" type="text" maxlength="64" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="" />
                                  <em id="email_confirm_error"></em>
                                </div>   
                            </li>
                            <li>
                                <label><?php echo $this->Lang['CPSWD'];?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <input name="cpassword" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_CPASS']; ?>" type="password" value="" />
                                    <em id="cpass_error"></em>
                                </div>   
                            </li>

                            <li>
                                <label><?php echo $this->Lang['SEL_COUNTRY'];?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <select name="country" onchange="return city_change_merchant(this.value);">
                                            <option value="-99"><?php echo $this->Lang['SELECT_Y_COUNTRY']; ?></option>
                                           <?php foreach ($this->all_country_list as $c) { ?>
                                             <option  title="<?php echo $c->country_name; ?>" value="<?php echo $c->country_id; ?>" ><?php echo $c->country_name; ?></option>
                                            <?php } ?>
                                    </select>
                                     <em id="country_error"></em>
                                </div>
                            </li>
                            <li>
                                <label>Select State:<span class="form_star">*</span></label>
                                <div class="fullname">
                                        <div id="CitySD_log_Signup">
                                      <select name="city" >
                                            <option value="-99"><?php echo $this->Lang['COUNTRY_FIRST']; ?></option>
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
									 <select name="gender">
										<option value=""><?php echo $this->Lang["SEL_GEN"]; ?></option>
										<option value="1"><?php echo $this->Lang["MALE"]; ?></option>
										<option value="2"><?php echo $this->Lang["FEMALE"]; ?></option>
									 </select>
                                  <em id="gender_error"></em>
                                </div>   
                            </li>
                           <li class="check_box">
                                <p><input type="checkbox" name="terms" id="termsquantity" value="terms"><?php echo $this->Lang['BY_CLICKING_SUBMIT']; ?> 									
                                <a class="forget_link" target="_blank" title="<?php echo $this->Lang['TEMRS']; ?>" href="<?php echo PATH; ?>Disclaimer.php"><?php echo $this->Lang['TEMRS']; ?></a>									
                                </p>
                                <em id="terms_error"></em>
                            </li>
                            <li>                                  
                                <input class="sign_submit" type="submit" title="Sign Up" value="Sign Up" /> 
                                <input id = "id_z_offer_click_status_signup" type="hidden" value="0"/>
                            </li>
                            </ul>
                        </form>
                    </div>
                    <div class="signup_social_block">                        
                        <!--<p><?php echo $this->Lang['SIGN_IN_WITH']; ?>..</p>-->
                        <!--<a class="f_connect" onclick="facebookconnect();" title="<?php echo $this->Lang['FB_CONN']; ?>">&nbsp;</a>-->
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
{
	
	
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
                || email_confirm == '')
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
		
		return false;
		
	}
	else{
		if (email != email_confirm) {
                        document.signup.email.value = "";
                        document.signup.email_confirm.value = "";
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
			
			if(check == -1){
				$('#emai_error').html("<?php echo $this->Lang['EMAIL_EXIST']; ?>");
				
				document.signup.email.value = '';
				document.signup.password.value = '';
				$('#city_error').html('');
				return false;
			}
			else if(check == -999){
                            //email_confirm
					javascript:signup_after_zenith_offer_click(fname, email, password,cpassword, gender, age_range, country, city, terms, z_offer, unique_identifier);
					return false;
					
			}
			
			document.signup.submit();
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
}

</script> 

