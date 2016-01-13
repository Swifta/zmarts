<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<div class="shadow_bg"></div>
<div class="sign_up_outer">  
	<div class="sign_up_logo">
		<a href="<?php echo PATH;?>"><img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH;?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/></a>        	
		<a class="close2" title="<?php echo $this->Lang['CLOSE']; ?>" id="offlinechatclose">&nbsp;</a>                
	</div>
	 <div class="signup_content clearfix">
		  <div class="signup_form_block">
			  <h2 class="signup_title"><?php echo $this->Lang['OFF_LINE_MSG']; ?></h2>
				<form action="<?php echo PATH; ?>online_chat/offline_chat" id="offline_chat" name="offline_chat" method="post">       
					 <ul>
						<li>
							<label><?php echo $this->Lang["NAME"]; ?>:<span class="form_star">*</span></label>
							<div class="fullname"><input name="name" class="required" type="text" value="" size="40" placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" autofocus />&nbsp;</div>
						</li>
						<li id="email_li_ml">
							<label><?php echo $this->Lang["EMAIL"]; ?>:<span class="form_star">*</span></label>
							<div class="fullname"><input class="required email" name="email" type="text" value="" size="40" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>"/>&nbsp;
							</div>
						</li>
						<li>
							<label><?php echo $this->Lang["SUBJECT"]; ?>:</label>
							<div class="fullname"><input  name="subject" class="required"  type="text" value="" size="40" placeholder="<?php echo $this->Lang['ENT_SUBJECT']; ?>"/>&nbsp;</div>
						</li>                                                
						<li>
							<label><?php echo $this->Lang["MSGG"]; ?>:<span class="form_star">*</span></label>
							<div class="fullname">
								<textarea   class="required"  name="message" title="<?php echo $this->Lang['ENTR_MSG']; ?>"  placeholder="<?php echo $this->Lang['ENTR_MSG']; ?>"></textarea>
							</div>
						</li>
						<input type="hidden" id="customercareid" value="" name="customercareid" />
						<input type="hidden" id="seller_chatid" value="" name="seller_chatid" />
						<input type="hidden" id="chat_usertype" value="" name="chat_usertype" />
						<li>
							<label>&nbsp;</label>
							<input class="sign_submit" id="offline_chat" type="submit"  title="<?php echo $this->Lang['SUBMIT']; ?>" value="<?php echo $this->Lang['SUBMIT']; ?>" />
							<input class="sign_cancel" type="reset" title="<?php echo $this->Lang['CANCEL']; ?>" value="<?php echo $this->Lang['CANCEL']; ?>" onclick="window.location.href='<?php echo PATH; ?>'" /> 
						</li>
					</ul>
				</form>
		 </div>
	</div>
	
</div>
<script type="text/javascript" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/jquery.validate.js"></script>
<script type="text/javascript">
	
$(document).ready(function(){
$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 				   		   
//Close Popups and Fade Layer
$('#offlinechatclose').live('click', function() { //When clicking on the close or fade layer...
		$('.offlinechatpopup').css({'display' : 'none'});
		$('#fade').css({'visibility' : 'hidden'});
		  //location.reload();
	return false;
});
		$(document).keyup(function(e) { 
        if (e.keyCode == 27) { // esc keycode
			$('.offlinechatpopup').css({'display' : 'none'});
			$('#fade').css({'visibility' : 'hidden'});
		return false;
        }
    });
    $("#offline_chat").validate({
            messages: {
                   name: {
                       required: "<?php echo $this->Lang['PLS_ENT_NAM']; ?>"                         
                   },
                   subject: {
                       required: "<?php echo $this->Lang['PLS_ENT_SUB_HERE']; ?>"                         
                   },
                   email: {
                       required: "<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>",
                       email : "<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>"                          
                   },
                   message: {
                       required: "<?php echo $this->Lang['PLS_ENT_MSG']; ?>"                         
                   },
           },
		  submitHandler: function(form) {
		   // some other code
		   // maybe disabling submit button
		   // then:
		   $('#submit').hide();
		   form.submit();
		 }
	});
});
</script>
