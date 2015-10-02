<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/js/jquery.validate.js'; ?>" type="text/javascript"></script>
<style>
.error{float: left;width: 50%; } 
</style>

<!-- SELLER SIGNUP -->
    <div class="contianer_outer">
        <div class="contianer_inner">
            <div class="contianer seller_t">                
                <h2 class="seller_sign_title"><?php echo $this->Lang['WEL_M_Z_SIGN']; ?></h2>
                <p class="seller_sign_info"><?php echo $this->Lang['YOU_GUIDED_CRTE_ACCT_OPEN']; ?></p>
                <div class="seller_signup clearfix">
                    <div class="seller_signup_menu">
                        <div class="seller_signup_introduction">
                            <span>01</span>
                            <p><?php echo $this->Lang['INTRO']; ?></p>
                        </div>
                        <div class="seller_signup_form_submit active_tab">
                            <span>02</span>
                            <p>Merchant [A/C Opening]</p>                            
                        </div>
                        
                        <?php /*<div class="seller_signup_finish">                            
                            <span>03</span>
                            <p><?php echo $this->Lang['SECTOR_SEL']; ?></p>                            
                        </div>*/?>
                        <div class="seller_signup_finish">                            
                            <span>03</span>
                            <p><?php echo $this->Lang['FINISH']; ?></p>                            
                        </div>
                    </div>
         <form id="zenith_account_open" name="zenith_offer" method="POST"  autocomplete="off">
                    <div class="payouter_block pay_br">
                        <h3 class="paybr_title pay_titlebg">Merchant bank account opening : </h3>
                        <div class="p_inner_block clearfix">
                            <div class="payment_form_section">
                                <div class="payment_form payment_shipping_form ">
                              
                              <ul>                               
                            <li>
                              <label><?php echo $this->Lang["FIRST_NAME"]; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <input class="z_acc_input" name="f_name" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" autofocus required/>
                                   <em id="f_name_err"></em>
                                </div> 
                            </li>
                             <li>
                             
                                <label><?php echo $this->Lang["LAST_NAME"]; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                   <input name="l_name" class="z_acc_input" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" required/>
                                   <em id="l_name_err"></em>
                                </div>  
                                
                                
                            </li>
                            <li>
                                <label><?php echo $this->Lang['EMAIL']; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                  <input name="email" class="z_acc_input" type="text" maxlength="64" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="" required/>
                                  <em id="email_err"></em>
                                </div>     
                            </li>
                             <li>
                                <label><?php echo $this->Lang["PHO"]; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                   <input name="phone" class="z_acc_input" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_PHONE']; ?>" value=""  required/>
                                   <em id="phone_err"></em>
                                </div>  
                            </li>
                            <li>
                                
                                
                                 <label><?php echo $this->Lang["ADDRES"]; ?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                   <input name="addr" class="z_acc_input" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" value="" required />
                                   <em id="addr_err"></em>
                                </div>   
                                
                                 
                            </li>
                          </ul>  
                            
                            <div style="float:left">
                            <li>
                                <label><?php echo $this->Lang['GENDER'];?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                    <select name="gender" class="z_acc_input" required>
                                            <option value="-99"><?php echo $this->Lang['SEL_GENDER']; ?></option>
                                           
                                             <option  title="<?php echo $this->Lang['MALE']; ?>" value="M" ><?php echo $this->Lang['MALE']; ?></option>
                                             <option  title="<?php echo $this->Lang['FEMALE']; ?>" value="F" ><?php echo $this->Lang['FEMALE']; ?></option>
   
                                    </select>
                                     <em id="gender_err"></em>
                                </div>  
                            </li>

                            <br />
                            <li>
                            
                            
                                <label><?php echo $this->Lang['ZENITH_BRANCH'];?>:<span class="form_star">*</span></label>
                                <div class="fullname" >
                                        <div id="CitySD_log">
                                      <select name="branch_no" id="id_z_branch"  class="z_acc_input" required>
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_BRANCH']; ?></option>
                                            <?php
                                            echo $this->branch_options;
                                            ?>
                                    </select>
                                    </div>
                                     <em id="branch_no_err"></em>
                                </div>
                                
                                
                                
                            </li>
                            <br />
                            <li>
                            
                            
                               <label><?php echo $this->Lang['ZENITH_CLASS_CODE'];?>:<span class="form_star">*</span></label>
                                <div class="fullname">
                                        <div id="CitySD_log">
                                      <select name="class_code" id = "id_z_class" class="z_acc_input" required>
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_CLASS']; ?></option>
                                            <?php
                                            echo $this->class_code_options;
                                            ?>
                                    </select>
                                    </div>
                                     <em id="class_code_err"></em>
                                </div>
                                
                           </li>
                            <br />
			    <!--<li>
                                <label><?php echo $this->Lang['UNIQ_IDEN'];?>:<span class="form_star"></span></label>
                                <div class="fullname">
                                    <input name="unique_identifier" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_UNIQ_IDEN']; ?>" type="text" value="" />
                                </div>   
                                <label></label>
                            </li>-->
                           <li class="check_box">
                                  <p><input type="checkbox" name="terms" id="id_terms" class="z_acc_input" value="0" required><?php echo $this->Lang['Z_BY_CLICKING_SUBMIT']; ?> 									
                                <a class="forget_link" target="_blank" title="<?php echo $this->Lang['TEMRS']; ?>" href="<?php echo PATH; ?>zenith_terms-and-conditions.php"><?php echo $this->Lang['TEMRS']; ?></a>
                         								
                                </p>
                                <em id="terms_err"></em>
                            </li>
                            <br />
                            <div class="buy_it complete_order_button">                                  
                                 <input class="sign_submit" type="submit" value="Open Account" title="Open Account">
                                 
                            </div>
                            &nbsp;&nbsp;&nbsp; <a href="<?php echo PATH."merchant-signup-step2.html"; ?>" class="sign_cancel">Go Back</a>
                            </div>
                            
                                </div>
                                </div>
                            </div>
                        </div>
                              
                        </form>
                </div>
            </div>
        </div>
    </div>
        </div>
        

        
        
        <div class='popup_block_theme'><?php echo new View("themes/" . THEME_NAME . '/seller/preview_theme_popup'); ?></div>
    <!-- SELLER SIGNUP -->
    
 <script>
 
function openMainView(){
	$('#fade').css({'visibility' : 'visible'});
	$('.popup_block_theme').css({'display' : 'block'});
}

function previewTheme(s){
    
    var select = document.getElementById("subSector");
    var value = "";
    var image_path = "<?php echo PATH; ?>custom/images/themes/";
    //alert(value);
    //preview_theme_selected
    if (select.selectedIndex !== -1){
        value = select.options[select.selectedIndex].text;
        image_path+=value.toLowerCase()+".jpg";
    }
    else{
        value = "";
        image_path+="default.jpg";
    }
    
    $(".preview_theme_selected").attr("src", image_path);
    //document.getElementById("preview_theme_selected").src= image_path;
    //alert(image_path);
    
}

    $(document).ready(function(){
        $('.popup_block_theme').css({'display' : 'none'});
         $("#signup2").validate({
			 messages: {				 
		   firstname: {
			   required: "<?php echo $this->Lang['PLS_ENT_FNAM']; ?>"                         
		   },

		   lastname: {
			   required: "<?php echo $this->Lang['PLS_ENT_LNAM']; ?>"                         
		   },

		   email: {
				required:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>",
				email:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>"                       
			},
		   
		   mr_address1: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
		     mr_address2: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
		  mr_mobile : {
			   required: "<?php echo $this->Lang['PLZ_ETR_PHO']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
			},
		  error_nuban : {
			   required: "<?php echo $this->Lang['PLZ_ETR_NUBAN']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NUBAN']; ?>"                             
			},
			payment_acc: {
				required:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>",
				email:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>"                       
			},
    },
 submitHandler: function(form) {
   // some other code
   // maybe disabling submit button
   // then:
	// $('div#submit').hide();
   form.submit();
 }
});
});
   


 function submit_form()
 {
	document.signup2.submit();
	 
 }
 </script>
 
 <script> 
function atleast_onecheckbox(e) {
          if ($("input[type=checkbox]:checked").length === 0) {
              e.preventDefault();
              alert('Shipping Method Should be Mandatory, You should choose any one of the shipping method');
              return false;
          }
}

	</script>
	
