<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
	<div class="shadow_bg"></div>
        <div class="sign_up_outer">  
            <div class="sign_up_logo">
                <a href="<?php echo PATH;?>"><img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH;?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/></a>        	
                <a class="close2" title="<?php echo $this->Lang['CLOSE']; ?>" id="chatclose">&nbsp;</a>                
            </div>
            <div class="signup_content clearfix">
              <div class="signup_form_block" style="border:none;">
                  <h2 class="signup_title"><?php echo $this->Lang['ENT_DET_CHAT']; ?></h2>
                  <form id="chat" name="chat" method="post" action="" onsubmit="return validatechatForms();"  autocomplete="off">
                      <ul>
						   <li>
                              <label><?php echo $this->Lang['NAME']; ?>:<span class="form_star">* </span> </label>
                              <div class="fullname">
                                  <input type="text" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" name="chat_name" autocomplete="off">                         
                                  <em id="chat_name_error"></em>                    
                              </div>
                          </li> 
                          <li>
                              <label><?php echo $this->Lang['EMAIL']; ?>:<span class="form_star">*</span> </label>                        
                              <div class="fullname">
                                  <input type="text" value="" name="chat_email" maxlength="128" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" autocomplete="off" />                        
                                  <em id="chat_email_error"></em>                    
                              </div>   
                          </li>
                                            
                          
                          <li>
                              <input class="sign_submit" type="submit" value="<?php echo $this->Lang['SUBMIT']; ?>" title="<?php echo $this->Lang['SUBMIT']; ?>" onclick="return validatechatForms();">
                          </li>
                      </ul>                                                                       
                  </form>
              </div>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){

$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 				   		   
//Close Popups and Fade Layer
$('#chatclose').live('click', function() { //When clicking on the close or fade layer...
		$('.chatpopup').css({'display' : 'none'});
		$('#fade').css({'visibility' : 'hidden'});
		  //location.reload();
	
	
	return false;
});
		$(document).keyup(function(e) { 
        if (e.keyCode == 27) { // esc keycode
			$('.chatpopup').css({'display' : 'none'});
			$('#fade').css({'visibility' : 'hidden'});
	  	
		
		return false;
        }
    });
});

function validatechatForms()
	{
		var email = document.chat.chat_email.value;		
		var name = document.chat.chat_name.value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if(email =='' || name == '' || (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length))
		{
			
			if(name == '')
			{
				$('#chat_name_error').html("<?php echo $this->Lang['PLS_ENT_NAM']; ?>");
			}
			else 
			{
				$('#chat_name_error').html('');
			}
			if(email == '')
			{
				$('#chat_email_error').html("<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>");

			}
			
			else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
			{
				$('#chat_email_error').html("<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>");
				document.chat.chat_name.value = '';
			}
			else {
				$('#chat_email_error').html('');
			}

		return false;	
		}
		
		else{
			var url= Path+'online_chat/chat_user_login/?chat_email='+email+'&chat_name='+name;
			$.post(url,function(check){
				if(check>0) {
					$('.chatpopup').css({'display' : 'none'});
					$('#fade').css({'visibility' : 'hidden'});
					location.reload();
				}
			});
			return false;	
		}

	
	}
	
	
</script>


