<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/js/jquery.validate.js'; ?>" type="text/javascript"></script>
<style>
.error{float: left;width: 50%; } 
</style>

<style>
    /*test style*/

.swifta_h1, .swifta_input::-webkit-input-placeholder, button {

 font-family: 'roboto', sans-serif;

 -webkit-transition: all 0.40s ease-in-out;

 transition: all 0.40s ease-in-out;

}




.swifta_h1 {

  height: 70px;

  width: 100%;

  font-size: 18px;

  /*background: #18aa8d;*/
  
  background:#A61C00;

  color: white;

  line-height: 150%;

  border-radius: 3px 3px 0 0;

  box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.2);

}




.swifta_form {

 box-sizing: border-box;

  width: 570px;

  margin: 150px auto 0;

  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);

  padding-bottom: 40px;

  border-radius: 3px;

}




.swifta_form .swifta_h1  {

  box-sizing: border-box;

  padding: 20px;

}




.swifta_input  {

 margin: 5px 0px;
 
  width: 500px;

  display: block;

  border: none;

  padding: 10px 0;
  
  outline:none;

  
/*  border-bottom: solid 1px #A61C00;*/

    border-bottom: thin 1px #A61C00;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background-position: -500px 0;

  background-size: 500px 100%;

  background-repeat: no-repeat;

 
 /*color: #A61C00;*/
 font-size:large;

}


/*.swifta_input  {

  margin: 40px 25px;

  width: 500px;

  display: block;

  border: none;

  padding: 10px 0;
  
  outline:none;

  
  border-bottom: solid 1px #A61C00;

  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background-position: -500px 0;

  background-size: 500px 100%;

  background-repeat: no-repeat;

  color: #0e6252;
 color: A61C00;

}*/
.swifta_input:focus, .swifta_input:valid {

 box-shadow: none;

 outline: none;

 background-position: 0 0;

}

.swifta_input:focus::-webkit-input-placeholder, swifta_input:valid::-webkit-input-placeholder {

 /*color: #1abc9c;*/
 color:#A61C00;
 font-size: 11px;

 -webkit-transform: translateY(-20px);

 transform: translateY(-20px);

 visibility: visible !important;
 

}




.swifta_button {

  border: none;

  /*background: #1abc9c;*/
 background:#A61C00;
  cursor: pointer;

  border-radius: 3px;

  padding: 6px;

  width: 200px;

  color: white;

  margin-left: 205px;

  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);

}




.swifta_button:hover {

  -webkit-transform: translateY(-3px);

  -ms-transform: translateY(-3px);

  transform: translateY(-3px);

  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);

}

.asterisk_input:after
{
content:"*"; 
color: #e32;
position: absolute; 
margin: 10px 0px 0px -57px; 
font-size: small; 
padding: 0 5px 0 0;

 }
 .asterisks_input:after
{
content:"*"; 
color: #e32;
position: absolute; 
margin: -5px 0px 0px 492px; 
font-size: small; 
padding: 0 5px 0 0;

 }
input[type=text],input[type=password]{border:#ccc solid 0px; border-bottom: 1px solid #ccc;}
/*test style closed*/
/*.fullname input[type=text],.fullname input[type=password],.fullname textarea{border: 1px solid #d9d9d9;font:normal 12px arial;  width:220px;color:#000;  padding: 7px;
    box-shadow: 1px 1px 1px 0 #EEEEEE inset;-moz-box-shadow: 1px 1px 1px 0 #EEEEEE inset;-webkit-box-shadow: 1px 1px 1px 0 #EEEEEE inset;background: #fff;
}*/
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
                    <div class="payment_form payment_shipping_form ">
         <form id="zenith_account_open" name="zenith_offer" method="POST"  autocomplete="off">
                    <div class="payouter_block pay_br">
                        <h3 class="paybr_title pay_titlebg">Merchant bank account opening : </h3>
                        <div class="p_inner_block clearfix">
                            <div class="payment_form_section">
                                <div class="payment_form payment_shipping_form ">
                              
                              <ul>                               
                            <li>
                              
                                <div class="">
                                    <input class="swifta_input" name="f_name" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" autofocus required/>
                                   <em id="f_name_err"></em>
                                </div> 
                            </li>
                             <li>
                             
                                
                                <div class="">
                                   <input name="l_name" class="swifta_input" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" required/>
                                   <em id="l_name_err"></em>
                                </div>  
                                
                                
                            </li>
                            <li>
                                
                                <div class="">
                                  <input name="email" class="swifta_input" type="text" maxlength="64" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="" required/>
                                  <em id="email_err"></em>
                                </div>     
                            </li>
                             <li>
                                
                                <div class="">
                                   <input name="phone" class="swifta_input" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_PHONE']; ?>" value=""  required/>
                                   <em id="phone_err"></em>
                                </div>  
                            </li>
                            <li>
                                
                                
                                
                                <div class="">
                                   <input name="addr" class="swifta_input" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" value="" required />
                                   <em id="addr_err"></em>
                                </div>   
                                
                                 
                            </li>
                          </ul>  
                            
                            <div style="float:left">
                            <li>
                               
                                <div class="">
                                    <select name="gender" class="swifta_input" required>
                                            <option value="-99"><?php echo $this->Lang['SEL_GENDER']; ?></option>
                                           
                                             <option  title="<?php echo $this->Lang['MALE']; ?>" value="M" ><?php echo $this->Lang['MALE']; ?></option>
                                             <option  title="<?php echo $this->Lang['FEMALE']; ?>" value="F" ><?php echo $this->Lang['FEMALE']; ?></option>
   
                                    </select>
                                     <em id="gender_err"></em>
                                </div>  
                            </li>

                            <br />
                            <li>
                            
                            
                               
                                <div class="" >
                                        <div id="CitySD_log">
                                      <select name="branch_no" id="id_z_branch"  class="swifta_input" required>
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
                            
                            
                              
                                <div class="">
                                        <div id="CitySD_log">
                                      <select name="class_code" id = "id_z_class" class="swifta_input" required>
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
	
